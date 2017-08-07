<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helpers\Helper;
use DB, Session, URL;
class GeneralController extends Controller
{
    public function updateOrder(Request $request){
        if ($request->ajax())
        {
        	$dataArr = $request->all();
        	$str_order = $dataArr['str_order'];        	
            $table = $dataArr['table'];        
            if( $str_order ){
            	$tmpArr = explode(";", $str_order);
            	$i = 0;
            	foreach ($tmpArr as $id) {
            		if( $id > 0 ){
            			$i++;
            			DB::table($table)
				        ->where('id', $id)				        
				        ->update(array('display_order' => $i));			
            		}
            	}
            }
        }        
    }
    public function updateOrderList(Request $request){
    
        $dataArr = $request->all();               
        $table = $dataArr['table'];        
        if( !empty($dataArr['display_order'] )){            
            foreach ($dataArr['display_order'] as $key => $display_order) {
                if( $display_order > 0 ){                    
                    DB::table($table)
                    ->where('id', $dataArr['id'][$key])                      
                    ->update(array('display_order' => $display_order));         
                }
            }
        }
        Session::flash('message', 'Cập nhật thứ tự thành công');
        return redirect(URL::previous());
    }
    
    public function getSlug(Request $request){
    	$strReturn = '';
    	if( $request->ajax() ){
    		$str = $request->str;
    		if( $str ){
    			$strReturn = str_slug( $str );
    		}
    	}
    	return response()->json( ['str' => $strReturn] );
    }
}
