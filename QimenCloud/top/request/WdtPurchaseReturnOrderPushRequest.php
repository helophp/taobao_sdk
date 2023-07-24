<?php
/**
 * TOP API: hu3cgwt0tc.wdt.purchase.return.order.push request
 * 
 * @author auto create
 * @since 1.0, 2021.02.26
 */
class WdtPurchaseReturnOrderPushRequest
{
	/** 
	 * 秘钥
	 **/
	private $appkey;
	
	/** 
	 * 采购退货出库单数据
	 **/
	private $purchaseReturnInfo;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	private $apiParas = array();
	
	public function setAppkey($appkey)
	{
		$this->appkey = $appkey;
		$this->apiParas["appkey"] = $appkey;
	}

	public function getAppkey()
	{
		return $this->appkey;
	}

	public function setPurchaseReturnInfo($purchaseReturnInfo)
	{
		$this->purchaseReturnInfo = $purchaseReturnInfo;
		$this->apiParas["purchase_return_info"] = $purchaseReturnInfo;
	}

	public function getPurchaseReturnInfo()
	{
		return $this->purchaseReturnInfo;
	}

	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.purchase.return.order.push";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sid,"sid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
