<?php
/**
 * TOP API: hu3cgwt0tc.wdt.ext.stockout.order.query.trade.huazhi request
 * 
 * @author auto create
 * @since 1.0, 2021.04.20
 */
class WdtExtStockoutOrderQueryTradeHuazhiRequest
{
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
	/** 
	 * 页号
	 **/
	private $pageNo;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 自定义字段
	 **/
	private $prop2;
	
	/** 
	 * 店铺编号
	 **/
	private $shopNo;
	
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
	 * 开始时间
	 **/
	private $startTime;
	
	/** 
	 * 状态
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

	public function setProp2($prop2)
	{
		$this->prop2 = $prop2;
		$this->apiParas["prop2"] = $prop2;
	}

	public function getProp2()
	{
		return $this->prop2;
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
		return "hu3cgwt0tc.wdt.ext.stockout.order.query.trade.huazhi";
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
