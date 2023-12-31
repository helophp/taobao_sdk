<?php

/**
 * 采购单留言列表，如果是代销，包含消费者留言。
 * @author auto create
 */
class OrderMessages
{
	
	/** 
	 * 留言内容
	 **/
	public $message_content;
	
	/** 
	 * 留言时间
	 **/
	public $message_time;
	
	/** 
	 * 留言标题，例如：分销商留言，供应商留言，买家留言
	 **/
	public $message_title;
	
	/** 
	 * 留言时的图片地址
	 **/
	public $pic_url;	
}
?>