<?php
/**
 * TOP API: hu3cgwt0tc.wdt.stockin.order.query.purchase request
 * 
 * @author auto create
 * @since 1.0, 2023.07.19
 */
class WdtStockinOrderQueryPurchaseRequest
{
	/** 
	 * app_rights
	 **/
	private $appRights;
	
	/** 
	 * 秘钥
	 **/
	private $appkey;
	
	/** 
	 * 结束日期
	 **/
	private $endTime;
	
	/** 
	 * 页号,默认0，从0页开始
	 **/
	private $pageNo;
	
	/** 
	 * 分页大小（最大不超过30条，默认返回30条）
	 **/
	private $pageSize;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 采购单号
	 **/
	private $srcOrderNo;
	
	/** 
	 * 开始日期
	 **/
	private $startTime;
	
	/** 
	 * 入库单状态 10已取消30待审核60待结算80已完成（默认80）
	 **/
	private $status;
	
	/** 
	 * 入库单号
	 **/
	private $stockinNo;
	
	/** 
	 * 外部单号
	 **/
	private $stockinOuterNo;
	
	private $apiParas = array();
	
	public function setAppRights($appRights)
	{
		$this->appRights = $appRights;
		$this->apiParas["app_rights"] = $appRights;
	}

	public function getAppRights()
	{
		return $this->appRights;
	}

	public function setAppkey($appkey)
	{
		$this->appkey = $appkey;
		$this->apiParas["appkey"] = $appkey;
	}

	public function getAppkey()
	{
		return $this->appkey;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
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

	public function setSrcOrderNo($srcOrderNo)
	{
		$this->srcOrderNo = $srcOrderNo;
		$this->apiParas["src_order_no"] = $srcOrderNo;
	}

	public function getSrcOrderNo()
	{
		return $this->srcOrderNo;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStockinNo($stockinNo)
	{
		$this->stockinNo = $stockinNo;
		$this->apiParas["stockin_no"] = $stockinNo;
	}

	public function getStockinNo()
	{
		return $this->stockinNo;
	}

	public function setStockinOuterNo($stockinOuterNo)
	{
		$this->stockinOuterNo = $stockinOuterNo;
		$this->apiParas["stockin_outer_no"] = $stockinOuterNo;
	}

	public function getStockinOuterNo()
	{
		return $this->stockinOuterNo;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.stockin.order.query.purchase";
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
