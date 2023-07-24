<?php
/**
 * TOP API: hu3cgwt0tc.wdt.refund.query request
 * 
 * @author auto create
 * @since 1.0, 2023.02.23
 */
class WdtRefundQueryRequest
{
	/** 
	 * 权限控制字段
	 **/
	private $appRights;
	
	/** 
	 * 秘钥
	 **/
	private $appkey;
	
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 退换单处理状态 5 补款 10已取消 20待审核 30已同意 40已拒绝 50待财审 60待收货 70部分到货 80待结算 90已完成
	 **/
	private $processStatus;
	
	/** 
	 * Erp内退换单编号
	 **/
	private $refundNo;
	
	/** 
	 * 店铺编号
	 **/
	private $shopNo;
	
	/** 
	 * 店铺编号（批量查询）
	 **/
	private $shopNos;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 平台原始退换单号
	 **/
	private $srcRefundNo;
	
	/** 
	 * 开始时间
	 **/
	private $startTime;
	
	/** 
	 * 原始单号
	 **/
	private $tid;
	
	/** 
	 * 请求时间类型
	 **/
	private $timeType;
	
	/** 
	 * 系统订单编号
	 **/
	private $tradeNo;
	
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

	public function setProcessStatus($processStatus)
	{
		$this->processStatus = $processStatus;
		$this->apiParas["process_status"] = $processStatus;
	}

	public function getProcessStatus()
	{
		return $this->processStatus;
	}

	public function setRefundNo($refundNo)
	{
		$this->refundNo = $refundNo;
		$this->apiParas["refund_no"] = $refundNo;
	}

	public function getRefundNo()
	{
		return $this->refundNo;
	}

	public function setShopNo($shopNo)
	{
		$this->shopNo = $shopNo;
		$this->apiParas["shop_no"] = $shopNo;
	}

	public function getShopNo()
	{
		return $this->shopNo;
	}

	public function setShopNos($shopNos)
	{
		$this->shopNos = $shopNos;
		$this->apiParas["shop_nos"] = $shopNos;
	}

	public function getShopNos()
	{
		return $this->shopNos;
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

	public function setSrcRefundNo($srcRefundNo)
	{
		$this->srcRefundNo = $srcRefundNo;
		$this->apiParas["src_refund_no"] = $srcRefundNo;
	}

	public function getSrcRefundNo()
	{
		return $this->srcRefundNo;
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

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function setTimeType($timeType)
	{
		$this->timeType = $timeType;
		$this->apiParas["time_type"] = $timeType;
	}

	public function getTimeType()
	{
		return $this->timeType;
	}

	public function setTradeNo($tradeNo)
	{
		$this->tradeNo = $tradeNo;
		$this->apiParas["trade_no"] = $tradeNo;
	}

	public function getTradeNo()
	{
		return $this->tradeNo;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.refund.query";
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
