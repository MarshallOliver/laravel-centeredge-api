<?php

namespace MarshallOliver\LaravelCenterEdgeAPI\Middleware;

use \Closure;
use MarshallOliver\LaravelCenterEdgeAPI\Area;
use MarshallOliver\LaravelCenterEdgeAPI\Arrival;
use MarshallOliver\LaravelCenterEdgeAPI\Booking;
use MarshallOliver\LaravelCenterEdgeAPI\MessageLog;
use Illuminate\Support\Facades\Route;

class SanitizeFilters
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if ($request->filter) {

            $sanitizedFilters = [];
            $operatorMap = [
                'e' => '=',
                'gt' => '>',
                'lt' => '<',
                'gte' => '>=',
                'lte' => '<=',
                'ne' => '<>',

            ];

            foreach ($request->filter as $table => $filters) {

                switch (strtolower($table)) {

                    case 'areas':

                        $fieldMap = Area::fieldMap;

                        break;

                    case 'arrivals':
                    case 'grouparrivals':
                    case 'group_arrivals':

                        $fieldMap = Arrival::fieldMap;

                        break;

                    case 'bookings':
                    case 'groupareabookings':
                    case 'group_area_bookings':

                        $fieldMap = Booking::fieldMap;

                        break;

                    case 'messagelog':
                    case 'message_log':

                        $fieldMap = MessageLog::fieldMap;

                        break;

                }

                foreach ($filters as $filter => $operators) {

                    foreach ($operators as $operator => $arg) {

                        if ($operator == 'like') {
                            $strings = preg_replace('/[\"\']/', '', preg_split('/\s(?=(?:[\"\'][^\"\']*[\"\']|[^\"\'])*$)/', $arg));

                            foreach ($strings as $string) {
                                if (strlen($string) > 0 && $string[0] == '-') {
                                    $notString = preg_replace('/\-/', '', $string);
                                    $sanitizedFilters[] = [$fieldMap['table'] . '.' . $fieldMap['fields'][$filter], 'not like', '%' . $notString . '%'];
                                } else {
                                    $sanitizedFilters[] = [$fieldMap['table'] . '.' . $fieldMap['fields'][$filter], 'like', '%' . $string . '%'];
                                }

                            }

                        } else {
                            $sanitizedFilters[] = [$fieldMap['table'] . '.' . $fieldMap['fields'][$filter], $operatorMap[strtolower($operator)], $arg];

                        }

                    }

                }

            }

            $request->filter = $sanitizedFilters;

        }
        
        return $next($request);
    }
}