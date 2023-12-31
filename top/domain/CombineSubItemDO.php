<?php

/**
 * 组合品信息
 * @author auto create
 */
class CombineSubItemDO
{
	
	/** 
	 * 成分品套餐原价
	 **/
	public $combine_sub_item_fee;
	
	/** 
	 * 教育优惠原价
	 **/
	public $edu_original_fee;
	
	/** 
	 * 套餐购成分品预计承诺时效(如果为时间格式为yyyy-MM-dd 则为绝对时间，为数字则为相对时间，比如7天内发货)
	 **/
	public $estcon_time;
	
	/** 
	 * 套餐购是否商品主子成分品  
	 **/
	public $ismain;
	
	/** 
	 * 商品数字编号
	 **/
	public $item_id;
	
	/** 
	 * 商品标题
	 **/
	public $item_name;
	
	/** 
	 * 商品数字编号 
	 **/
	public $num_iid;
	
	/** 
	 * 原价
	 **/
	public $origin_fee;
	
	/** 
	 * 商家外部编码(可与商家外部系统对接)
	 **/
	public $outer_iid;
	
	/** 
	 * 123
	 **/
	public $outer_sku_id;
	
	/** 
	 * 数量
	 **/
	public $quantity;
	
	/** 
	 * sku_id
	 **/
	public $sku_id;
	
	/** 
	 * SKU标题
	 **/
	public $sku_title;	
}
?>