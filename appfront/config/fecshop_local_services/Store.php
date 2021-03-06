<?php
   return [
   'store' => [
		'class' => 'fecshop\services\Store',
		'stores' => [
			
			# store key：域名去掉http部分，作为key，这个必须这样定义。
			'fecshop.appfront.fancyecommerce.com' => [
				'language' 		=> 'en_US',		# 语言简码需要在@common/config/fecshop_local_services/FecshopLang.php 中定义。
				'languageName' 	=> 'English',	# 语言简码对应的文字名称，将会出现在语言切换列表中显示。
				'localThemeDir'	=> '@appfront/theme/terry/theme01', # 设置当前store对应的模板路径。关于多模板的方面的知识，您可以参看fecshop多模板的知识。
				'thirdThemeDir'	=> [],  # 第三方模板路径，数组，可以多个路径
				'currency' 		=> 'USD', # 当前store的默认货币,这个货币简码，必须在货币配置中配置
				'mobile'		=> [ # 当设备满足什么条件的时候，进行跳转。
					'enable'		=> true,
					'condition'		=> ['phone','tablet'], # phone 代表手机，tablet代表平板
					'redirectUrl' 	=> 'fecshop.apphtml5.fancyecommerce.com',	# 如果是移动设备访问进行域名跳转，这里填写的值为store key
				],
				# 第三方账号登录配置
				'thirdLogin' => [
					# facebook账号登录
					'facebook' =>[       #fb api配置 ，fb可以一个app设置pc和手机web两个域名 
						'facebook_app_id'     => '1849609081926823',
						'facebook_app_secret' => '2e097a6d5a424531770fc05760dd7139',
					],
					# google账号登录
					"google" => [       #谷歌api visit https://code.google.com/apis/console to generate your google api
						'CLIENT_ID'  	 => '380372364773-qdj1seag9bh2n0pgrhcv2r5uoc58ltp3.apps.googleusercontent.com',
						'CLIENT_SECRET'  => 'ei8RaoCDoAlIeh1nHYm0rrwO',
					],
				]
			],
			'fecshop.appfront.fancyecommerce.com/fr' => [
				'language' 		=> 'fr_FR',
				'languageName' 	=> 'Français',
				'localThemeDir'	=> '@appfront/theme/terry/theme01',
				'thirdThemeDir'	=> [],
				'currency' 		=> 'RMB',
				'mobile'		=> [
					'enable'			=> true,
					'condition'			=> ['phone'], # phone 代表手机，tablet代表平板。
					'redirectDomain' 	=> 'fecshop.apphtml5.fancyecommerce.com/fr', # 跳转后的url。
				],
			],
			'fecshop.appfront.es.fancyecommerce.com' => [
				'language' 		=> 'es_ES',
				'languageName' 	=> 'Español',
				'localThemeDir'	=> '@appfront/theme/terry/theme01',
				'thirdThemeDir'	=> [],
				'currency' 		=> 'USD',
				'mobile'		=> [
					'enable'		=> true,
					'condition'		=> ['tablet'],
					'redirectDomain' 	=> 'fecshop.apphtml5.es.fancyecommerce.com',	
				],
			],
			'fecshop.appfront.fancyecommerce.com/cn' => [
				'language' 		=> 'zh_CN',
				'languageName' 	=> '中文',
				'localThemeDir'	=> '@appfront/theme/terry/theme01',
				'thirdThemeDir'	=> [],
				'currency' 		=> 'CNY',
				'mobile'		=> [
					'enable'		=> false,
					'condition'		=> ['phone','tablet'],
					'redirectDomain' 	=> 'fecshop.apphtml5.fancyecommerce.com/cn',	
				],
			],
		],
		
	],
			
];