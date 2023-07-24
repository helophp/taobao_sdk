<?php
/**
 * TOP API: alibaba.ascp.uop.supplier.consignorder.notify.received request
 * 
 * @author auto create
 * @since 1.0, 2022.02.16
 */
class AlibabaAscpUopSupplierConsignorderNotifyReceivedRequest
{
	/** 
	 * qimen.alibaba.ascp.uop.consignorder.notify报文中bizOrderCode履约单号
	 **/
	private $bizOrderCode;
	
	/** 
	 * 业务请求时间
	 **/
	private $bizTime;
	
	/** 
	 * 一盘货业务模式，默认为0代表商家仓商家配，为1代表商家仓自营配 (为1时会强制校验配CP和单号必须与取号时一致，且多包裹必须一次性发货)
	 **/
	private $businessModel;
	
	/** 
	 * qimen.alibaba.ascp.uop.consignorder.notify报文中的supplierId字段值
	 **/
	private $supplierId;
	
	private $apiParas = array();
	
	public function setBizOrderCode($bizOrderCode)
	{
		$this->bizOrderCode = $bizOrderCode;
		$this->apiParas["biz_order_code"] = $bizOrderCode;
	}

	public function getBizOrderCode()
	{
		return $this->bizOrderCode;
	}

	public function setBizTime($bizTime)
	{
		$this->bizTime = $bizTime;
		$this->apiParas["biz_time"] = $bizTime;
	}

	public function getBizTime()
	{
		return $this->bizTime;
	}

	public function setBusinessModel($businessModel)
	{
		$this->businessModel = $businessModel;
		$this->apiParas["business_model"] = $businessModel;
	}

	public function getBusinessModel()
	{
		return $this->businessModel;
	}

	public function setSupplierId($supplierId)
	{
		$this->supplierId = $supplierId;
		$this->apiParas["supplier_id"] = $supplierId;
	}

	public function getSupplierId()
	{
		return $this->supplierId;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.uop.supplier.consignorder.notify.received";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizOrderCode,"bizOrderCode");
		RequestCheckUtil::checkNotNull($this->supplierId,"supplierId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
