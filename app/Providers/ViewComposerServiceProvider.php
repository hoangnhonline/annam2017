<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\LoaiSp;
use App\Models\Cate;
use App\Models\Settings;

//use App\Models\Entity\SuperStar\Account\Traits\Behavior\SS_Shortcut_Icon;

/**
 * This is provider for using view share
 * @author AnPCD
 */
class ViewComposerServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//Call function composerSidebar
		$this->composerMenu();	
		
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Composer the sidebar
	 */
	private function composerMenu()
	{
		
		view()->composer( '*' , function( $view ){
			$menuNgang = $menuDoc = $loaiSpHot = [];
			$loaiSp = LoaiSp::where(['status' => 1])->orderBy('display_order')->get();

	        if( $loaiSp ){

	            foreach ( $loaiSp as $key => $value) {
	            	$tmpArr = ['name' => $value->name, 'slug' => $value->slug, 'id' => $value->id, 'is_hover' => $value->is_hover, 'is_hot' => $value->is_hot];	            		
	            	$child = Cate::where(['status' => 1, 'loai_id' => $value->id])
	                    ->orderBy('display_order')
	                    ->select('name', 'slug', 'id')
	                    ->get()->toArray();
	                  
	                $loaiSpKey[$value->id] = $tmpArr;
	                $loaiSpKey[$value->id]['child'] = $child;
	            	if( $value->menu_ngang == 1){
	            		$menuNgang[$value->id] = $tmpArr;
	            		$menuNgang[$value->id]['child'] = $child;
	            	}
	            	if( $value->menu_doc == 1){
	            		$menuDoc[$value->id] = $tmpArr;	
	            		$menuDoc[$value->id]['child'] = $child;
	            	}
	            	if( $value->is_hot == 1){
	            		$loaiSpHot[$value->id] = $tmpArr;
	            		$loaiSpHot[$value->id]['child'] = $child;
	            	}	                
	            }
	        }    
	        $settingArr = Settings::whereRaw('1')->lists('value', 'name');
	       // var_dump("<pre>", $menuDoc);die;   
	        //var_dump("<pre>", $loaiSpKey);die;
			$view->with( ['loaiSpKey' => $loaiSpKey, 'menuNgang' => $menuNgang, 'menuDoc' => $menuDoc, 'loaiSpHot' => $loaiSpHot, 'settingArr' => $settingArr] );
		});
	}
	
}
