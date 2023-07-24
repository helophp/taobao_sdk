<?php
/**
 * TOP API: 3yz3r43l61.morefood.data.in.sec request
 * 
 * @author auto create
 * @since 1.0, 2021.05.10
 */
class MorefoodDataInSecRequest
{
	/** 
	 * channel_id
	 **/
	private $channelId;
	
	/** 
	 * 数据
	 **/
	private $data;
	
	/** 
	 * appkey
	 **/
	private $thirdAppKey;
	
	/** 
	 * customerId
	 **/
	private $thirdCustomerId;
	
	/** 
	 * method
	 **/
	private $thirdMethod;
	
	private $apiParas = array();
	
	public function setChannelId($channelId)
	{
		$this->channelId = $channelId;
		$this->apiParas["channel_id"] = $channelId;
	}

	public function getChannelId()
	{
		return $this->channelId;
	}

	public function setData($data)
	{
		$this->data = $data;
		$this->apiParas["data"] = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setThirdAppKey($thirdAppKey)
	{
		$this->thirdAppKey = $thirdAppKey;
		$this->apiParas["third_app_key"] = $thirdAppKey;
	}

	public function getThirdAppKey()
	{
		return $this->thirdAppKey;
	}

	public function setThirdCustomerId($thirdCustomerId)
	{
		$this->thirdCustomerId = $thirdCustomerId;
		$this->apiParas["third_customerId"] = $thirdCustomerId;
	}

	public function getThirdCustomerId()
	{
		return $this->thirdCustomerId;
	}

	public function setThirdMethod($thirdMethod)
	{
		$this->thirdMethod = $thirdMethod;
		$this->apiParas["third_method"] = $thirdMethod;
	}

	public function getThirdMethod()
	{
		return $this->thirdMethod;
	}

	public function getApiMethodName()
	{
		return "3yz3r43l61.morefood.data.in.sec";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->data,"data");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}