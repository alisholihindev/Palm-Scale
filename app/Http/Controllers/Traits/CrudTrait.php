<?php 

namespace App\Http\Controllers\Traits;

use DB;
use Helpers\LogHelper;
use Illuminate\Http\Request;

trait CrudTrait {

	use CrudHelperTrait;

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
    	$model = $this->model->with($this->relation)->filter($request)->orderBy('id','DESC')->paginate($this->paginate);

    	$view  = [
    		'title'			=> $this->title,
    		'sub_title'		=> $this->generateSubTitle(__FUNCTION__),
    		'items'			=> $model,
    		'url'			=> $this->completeUrl(),
    		'data'			=> method_exists($this, 'formData') ? $this->formData() : null,
    		'filter'		=> method_exists($this, 'dataFilter') ? $this->dataFilter() : null,
    	];

	    return view($this->generateViewName(__FUNCTION__))->with($view);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$view = [
			'title'			=> $this->title,
			'sub_title'		=> $this->generateSubTitle(__FUNCTION__),
			'data'			=> method_exists($this, 'formData') ? $this->formData() : null,
			'url'			=> [
				'store'		=> $this->generateUrl('store'),
			],
			'form'			=> $this->generateViewName('form'),
		];

		return view($this->generateViewName(__FUNCTION__))->with($view);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store()
	{
		try {
			
			DB::beginTransaction();

			$data  = $this->getRequest();

			$model = $this->model->fill($data);

			$model->save(); 

			if (method_exists($this, 'customStore')) {
				$this->customStore($data, $model);
			}

			$log_helper 	= new LogHelper;

			$log_helper->storeLog('add', $model->id,$this->getMenuName());

			DB::commit();

			return $this->redirectSuccess(__FUNCTION__);

		} catch (Exception $e) {
			
			DB::rollback();

			return $this->redirectBackWithError($e->getMessage());
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$model = $this->model->with($this->relation)->findOrFail($id);

		$view  = [
			'title'				=> $this->title,
			'sub_title'			=> $this->generateSubTitle(__FUNCTION__),
			'item'				=> $model,
		];

		return view($this->generateViewName(__FUNCTION__))->with($view);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$model = $this->model->with($this->relation)->findOrFail($id);

		$view = [
			'title'			=> $this->title,
			'sub_title'		=> $this->generateSubTitle(__FUNCTION__),
			'item'			=> method_exists($this, 'customItemEdit') ? $this->customItemEdit($model) : $model,
			'data'			=> method_exists($this, 'formData') ? $this->formData() : null,
			'url'			=> [
				'update'	=> $this->generateUrl('update'),
			],
			'form'			=> $this->generateViewName('form'),
			'custom_data'	=> method_exists($this, 'customData') ? $this->customData($model) : null,
		];

		return view($this->generateViewName(__FUNCTION__))->with($view);
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

		try {
			
			DB::beginTransaction();

			$data  = $this->getRequest();

			$model = $this->model->findOrFail($id);

			$model->fill($data);

			$model->save();

			if (method_exists($this, 'customUpdate')) {
				$this->customUpdate($data, $model);
			}

			$log_helper 	= new LogHelper;

			$log_helper->storeLog('edit', $model->id,$this->getMenuName());

			DB::commit();

			return $this->redirectSuccess(__FUNCTION__);			

		} catch (Exception $e) {
			
			DB::rollback();

			return $this->redirectBackWithError($e->getMessage());

		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		try {
			
			DB::beginTransaction();

			$model = $this->model->with($this->relation)->findOrFail($id);

			if (method_exists($this, 'customDestroy')) {
				$this->customDestroy($model);
			}

			// if (!empty($this->validationRelation($model))) {
			// 	return $this->redirectWithSessionFlash($this->validationRelation($model));
			// }

			$log_helper 	= new LogHelper;

			$log_helper->storeLog('delete', $model->id,$this->getMenuName());

			$model->delete();

			DB::commit();

			return $this->redirectSuccess(__FUNCTION__);

		} catch (Exception $e) {
			
			DB::rollback();

			return $this->redirectBackWithError($e->getMessage());

		}
	}

}