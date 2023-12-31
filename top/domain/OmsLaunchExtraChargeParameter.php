<?php

/**
 * 请求对象
 * @author auto create
 */
class OmsLaunchExtraChargeParameter
{
	
	/** 
	 * 描述
	 **/
	public $desc;
	
	/** 
	 * 扩展字段
	 **/
	public $feature;
	
	/** 
	 * 发起调整金额 单位：分
	 **/
	public $price;
	
	/** 
	 * 原因类型 : 1为服务费用  2为二次上门费用  3为代付费用  4为配件费用  5为拆旧费用  6为维修费用  7为空跑费用  8为其它费用 
	 **/
	public $type;
	
	/** 
	 * BFC单号
	 **/
	public $wds_coordination_order_id;	
}
?>