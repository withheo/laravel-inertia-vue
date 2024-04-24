<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Event;
use Inertia\Inertia;

class DemoController extends Controller
{
    protected $datas = [
        [
            'id' => 1,
            'title' => 'test1',
            'category_id'=> 1,
            'create_at'=> '2024-04-23',        
        ],
        [
            'id' => 2,
            'title' => 'test3',
            'category_id'=> 2,
            'create_at'=> '2024-04-22',        
        ],
        [
            'id' => 3,
            'title' => 'test4',
            'category_id'=> 3,
            'create_at'=> '2024-04-21',        
        ],
        [
            'id' => 4,
            'title' => 'test2',
            'category_id'=> 4,
            'create_at'=> '2024-04-21',        
        ],
        [
            'id' => 5,
            'title' => 'test5',
            'category_id'=> 5,
            'create_at'=> '2024-04-20',        
        ],
        [
            'id' => 6,
            'title' => 'test7',
            'category_id'=> 4,
            'create_at'=> '2024-04-11',        
        ],
        [
            'id' => 7,
            'title' => 'test8',
            'category_id'=> 3,
            'create_at'=> '2024-04-12',        
        ],
        [
            'id' => 8,
            'title' => 'test3',
            'category_id'=> 2,
            'create_at'=> '2024-04-11',        
        ],
        [
            'id' => 9,
            'title' => 'test111',
            'category_id'=> 1,
            'create_at'=> '2024-04-13',        
        ],
        [
            'id' => 11,
            'title' => 'test11',
            'category_id'=> 2,
            'create_at'=> '2024-04-23',        
        ],
        [
            'id' => 12,
            'title' => 'test113',
            'category_id'=> 3,
            'create_at'=> '2024-04-22',        
        ],
        [
            'id' => 13,
            'title' => 'test14',
            'category_id'=> 3,
            'create_at'=> '2024-04-21',        
        ],
        [
            'id' => 14,
            'title' => 'test12',
            'category_id'=> 4,
            'create_at'=> '2024-04-21',        
        ],
        [
            'id' => 15,
            'title' => 'test15',
            'category_id'=> 5,
            'create_at'=> '2024-04-20',        
        ],
        [
            'id' => 16,
            'title' => 'test17',
            'category_id'=> 5,
            'create_at'=> '2024-04-11',        
        ],
        [
            'id' => 17,
            'title' => 'test18',
            'category_id'=> 5,
            'create_at'=> '2024-04-12',        
        ],
        [
            'id' => 18,
            'title' => 'test13',
            'category_id'=> 5,
            'create_at'=> '2024-04-11',        
        ],
        [
            'id' => 19,
            'title' => 'test1111',
            'category_id'=> 3,
            'create_at'=> '2024-04-13',        
        ],
        [
            'id' => 21,
            'title' => 'test21',
            'category_id'=> 3,
            'create_at'=> '2024-04-23',        
        ],
        [
            'id' => 22,
            'title' => 'test23',
            'category_id'=> 1,
            'create_at'=> '2024-04-22',        
        ],
        [
            'id' => 23,
            'title' => 'test24',
            'category_id'=> 1,
            'create_at'=> '2024-04-21',        
        ],
        [
            'id' => 24,
            'title' => 'test22',
            'category_id'=> 1,
            'create_at'=> '2024-04-21',        
        ],
        [
            'id' => 25,
            'title' => 'test25',
            'category_id'=> 1,
            'create_at'=> '2024-04-20',        
        ],
        [
            'id' => 26,
            'title' => 'test27',
            'category_id'=> 1,
            'create_at'=> '2024-04-11',        
        ],
        [
            'id' => 27,
            'title' => 'test28',
            'category_id'=> 1,
            'create_at'=> '2024-04-12',        
        ],
        [
            'id' => 28,
            'title' => 'test23',
            'category_id'=> 1,
            'create_at'=> '2024-04-11',        
        ],
        [
            'id' => 29,
            'title' => 'test2111',
            'category_id'=> 1,
            'create_at'=> '2024-04-13',        
        ],
    ];

    protected $filters = [
        [
            'name' => 'filter1',
            'category_id'=> 1,
            'active' => false,
        ],
        [
            'name' => 'filter2',
            'category_id'=> 2,
            'active' => false,
        ],
        [
            'name' => 'filter3',
            'category_id'=> 3,
            'active' => false,
        ],
        [
            'name' => 'filter4',
            'category_id'=> 4,
            'active' => false,
        ],
        [
            'name' => 'filter5',
            'category_id'=> 5,
            'active' => false,
        ],
    ];

    public function index()
    {
        $request = request(); 
        $allParams = $request->query->all();

        $category_id = $allParams['category_id'] ?? 1;

        $contents = array_filter($this->datas, function($data) use($category_id) {
            return $data['category_id'] == $category_id;
        });

        $findFilter =  array_filter($this->filters, function($data) use($category_id) {
            return $data['category_id'] == $category_id;
        });

        $findFilter['active'] = true;

        $contents = [
            'total' => count($contents),
            'data' => $contents,
        ];
        

        return Inertia::render('app/Index', [
            'contents' => $contents,
            'filters' => $this->filters,
        ]);
    }
}
