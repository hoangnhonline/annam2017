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
		$cateArrByLoai = [];		
		view()->composer( '*' , function( $view ){
			
			$loaiSpList = LoaiSp::where(['status' => 1])->orderBy('display_order')->get();

	        if( $loaiSpList ){
	            foreach ( $loaiSpList as $key => $value) {	            	          		
	            	$cateArrByLoai[$value->id] = Cate::where(['status' => 1, 'loai_id' => $value->id])
	                    ->orderBy('display_order')
	                    ->select('name', 'slug', 'id')
	                    ->get();
	            }
	        }    
	        $settingArr = Settings::whereRaw('1')->lists('value', 'name');
	       // var_dump("<pre>", $menuDoc);die;   
	        //var_dump("<pre>", $loaiSpKey);die;
			$view->with( [
					'loaiSpList' => $loaiSpList, 
					'settingArr' => $settingArr,
					'cateArrByLoai' => $cateArrByLoai
					] );
		});
	}
	
}
