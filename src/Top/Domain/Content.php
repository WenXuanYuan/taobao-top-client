<?php

namespace Top\Domain;


/**
 * 库存占用
 * @author auto create
 */
class Content
{
	
	/** 
	 * 商品信息列表
	 **/
	public $item_inventory_list;
	
	/** 
	 * 当一个仓库不满足库存时，是否允许占用多个仓库库存，如果允许，需要指定最大分仓数量，但不能拆分订单明细。 0：不限个数，只要满足发货，不限分占几个仓库 1：默认值，只能单仓发 >1:最大占用数量
	 **/
	public $max_store_num;
	
	/** 
	 * ERP订单编码
	 **/
	public $order_code;
	
	/** 
	 * 订单来源（213 天猫，201 淘宝，214 京东，202 1688 阿里中文站 ，203 苏宁在线，204 亚马逊中国，205 当当，208 1号店，207 唯品会，209 国美在线，210 拍拍，206 易贝ebay，211 聚美优品，212 乐蜂网，215 邮乐，216 凡客，217 优购，218 银泰，219 易讯，221 聚尚网，222 蘑菇街，223 POS门店，301 其他）
	 **/
	public $order_source;
	
	/** 
	 * 收件人信息
	 **/
	public $receiver_info;
	
	/** 
	 * 仓库编码
	 **/
	public $store_code;	
}
