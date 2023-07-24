<?php
/**
 * TOP API: hu3cgwt0tc.wdt.trade.logs.query request
 * 
 * @author auto create
 * @since 1.0, 2020.12.21
 */
class WdtTradeLogsQueryRequest
{
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
	/** 
	 * 是否历史订单（默认0）
	 **/
	private $isHis;
	
	/** 
	 * 页号
	 **/
	private $pageNo;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 原始订单字符串
	 **/
	private $srcTids;
	
	/** 
	 * 开始时间
	 **/
	private $startTime;
	
	/** 
	 * 订单编号字符串
	 **/
	private $tradeNos;
	
	/** 
	 * 类型
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setIsHis($isHis)
	{
		$this->isHis = $isHis;
		$this->apiParas["is_his"] = $isHis;
	}

	public function getIsHis()
	{
		return $this->isHis;
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

	public function setSrcTids($srcTids)
	{
		$this->srcTids = $srcTids;
		$this->apiParas["src_tids"] = $srcTids;
	}

	public function getSrcTids()
	{
		return $this->srcTids;
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

	public function setTradeNos($tradeNos)
	{
		$this->tradeNos = $tradeNos;
		$this->apiParas["trade_nos"] = $tradeNos;
	}

	public function getTradeNos()
	{
		return $this->tradeNos;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.trade.logs.query";
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
