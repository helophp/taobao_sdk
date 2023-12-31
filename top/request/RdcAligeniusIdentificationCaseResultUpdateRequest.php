<?php
/**
 * TOP API: taobao.rdc.aligenius.identification.case.result.update request
 * 
 * @author auto create
 * @since 1.0, 2023.07.17
 */
class RdcAligeniusIdentificationCaseResultUpdateRequest
{
	/** 
	 * 请求参数
	 **/
	private $param;
	
	private $apiParas = array();
	
	public function setParam($param)
	{
		$this->param = $param;
		$this->apiParas["param"] = $param;
	}

	public function getParam()
	{
		return $this->param;
	}

	public function getApiMethodName()
	{
		return "taobao.rdc.aligenius.identification.case.result.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
