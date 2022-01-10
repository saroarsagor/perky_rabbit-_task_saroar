<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Articles;
use Auth;
use\Carbon\Carbon;
use DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {

       /* if($request->get('query')){
            $query = $request->get('query');
            $data = DB::table('articles')
                ->where('title', 'LIKE', "%{$query}%")
                ->orWhere('article_type', 'LIKE', "%{$query}%")
                ->get();

                $output = '';
                if (count($data)>0) {
                    $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
                    foreach ($data as $row){
                        $output .= '<li class="list-group-item" style="cursor:pointer;" value='.$row->id.'>'.$row->title.'</li>';
                    }
                    $output .= '</ul>';
                }
                else {
                    $output .= '<li class="list-group-item">'.'No results'.'</li>';
                }
               
                return $output;
        }*/



        if($request->get('query')){
        $query = $request->get('query');
        $data = DB::table('articles')
          ->where('title', 'LIKE', "%{$query}%")
          ->orWhere('article_type', 'LIKE', "%{$query}%")
          ->get();

        $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
        foreach($data as $row)
        {
         $output .= '
         
         <li style="border-bottom:1px solid #ddd;height:60px;padding:10px 10px" value='.$row->id.'>'.$row->title.'</li>

         ';
        }
        $output .= '</ul>';
        echo $output;
      }
        
       
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchArticalDetails(Request $request)
    {
        $id= $request->slugId;

        dd($id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
