<?php
/**
 * TOP API: hu3cgwt0tc.wdt.stockout.order.query.trade request
 * 
 * @author auto create
 * @since 1.0, 2023.01.09
 */
class WdtStockoutOrderQueryTradeRequest
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
	 * 时间查询条件
	 **/
	private $isByModified;
	
	/** 
	 * 货位节点校验
	 **/
	private $isNoPosition;
	
	/** 
	 * 页号,默认0，从0页开始。
	 **/
	private $pageNo;
	
	/** 
	 * 分页大小（最大不超过30条，默认返回30条）
	 **/
	private $pageSize;
	
	/** 
	 * 店铺编号
	 **/
	private $shopNo;
	
	/** 
	 * 店铺编号(批量)
	 **/
	private $shopNos;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 系统订单编号
	 **/
	private $srcOrderNo;
	
	/** 
	 * 原始单号
	 **/
	private $srcTid;
	
	/** 
	 * 开始日期
	 **/
	private $startTime;
	
	/** 
	 * 状态，55已审核,5,已取消 (此参数查询时间为最后更新时间)，不传此参数默认按出库时间查询，已发货已完成单据。
	 **/
	private $status;
	
	/** 
	 * 出库单号
	 **/
	private $stockoutNo;
	
	/** 
	 * 仓库编号
	 **/
	private $warehouseNo;
	
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

	public function setIsByModified($isByModified)
	{
		$this->isByModified = $isByModified;
		$this->apiParas["is_by_modified"] = $isByModified;
	}

	public function getIsByModified()
	{
		return $this->isByModified;
	}

	public function setIsNoPosition($isNoPosition)
	{
		$this->isNoPosition = $isNoPosition;
		$this->apiParas["is_no_position"] = $isNoPosition;
	}

	public function getIsNoPosition()
	{
		return $this->isNoPosition;
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

	public function setSrcOrderNo($srcOrderNo)
	{
		$this->srcOrderNo = $srcOrderNo;
		$this->apiParas["src_order_no"] = $srcOrderNo;
	}

	public function getSrcOrderNo()
	{
		return $this->srcOrderNo;
	}

	public function setSrcTid($srcTid)
	{
		$this->srcTid = $srcTid;
		$this->apiParas["src_tid"] = $srcTid;
	}

	public function getSrcTid()
	{
		return $this->srcTid;
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

	public function setStockoutNo($stockoutNo)
	{
		$this->stockoutNo = $stockoutNo;
		$this->apiParas["stockout_no"] = $stockoutNo;
	}

	public function getStockoutNo()
	{
		return $this->stockoutNo;
	}

	public function setWarehouseNo($warehouseNo)
	{
		$this->warehouseNo = $warehouseNo;
		$this->apiParas["warehouse_no"] = $warehouseNo;
	}

	public function getWarehouseNo()
	{
		return $this->warehouseNo;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.stockout.order.query.trade";
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
