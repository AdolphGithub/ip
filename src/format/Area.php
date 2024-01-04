<?php

namespace Lucia\ip\format;

use Lucia\ip\format\Iso3166;

class Area
{
    public static $area = [
        '天津市河东区 /河北区联通' => '天津市联通',
        '北京市 广东盈世计算机科技有限公司联通节点' => '北京市联通',
        '江苏省南京市 驿站网吧(鼓楼区山西路虎啸花园后门)' => '江苏省南京市',
    ];


    public static $countries = [
        'IANA' => '保留地址',
        '欧盟' => '欧洲地区',
        '亚洲' => '亚洲地区',
        '欧洲' => '欧洲地区',
        '澳洲' => '澳大利亚',
        '东北三省' => '中国',
        '长江大学东校区' => '中国/湖北荆州',
        '沈阳市东陵区' => '中国/辽宁沈阳',
        '沈阳市皇姑区' => '中国/辽宁沈阳',
        '合肥工业大学' => '中国/安徽合肥',
        '宁波大学' => '中国/浙江宁波',
        '长江大学' => '中国/湖北荆州',
        '联合国' => '美国',
        '欧美地区' => '美洲地区',
        '运营商级NAT' => '共享地址',
        '电信' => '中国/电信',
        '印尼' => '印度尼西亚',
        '韩国首尔' => '韩国/首尔',
        '本地' => '本地链路',
        '广州市清远市清城区' => '中国/广东省广州市清远市清城区',
        '加勒比海地区' => '库拉索',
        '孟加拉国' => '孟加拉',
        '成都信息工程学院' => '中国/四川成都',
        '华东理工大学' => '中国/上海',
        '南开大学' => '中国/天津',
        'CoreLink骨干网' => '骨干网/CoreLink',
        '长春工业大学' => '中国/吉林长春',
        '西安石油大学(本部)计算机中心二楼(第五微机室)' => '中国/陕西西安',
        '西安石油大学' => '中国/陕西西安',
        '北方工业大学' => '中国/北京',
        '首都经贸大学东区7楼大机房' => '中国/北京',
        '首都经贸大学' => '中国/北京',
        '荷兰省' => '荷兰/北荷兰省',
        '南京大学鼓楼校区' => '中国/江苏南京',
        '南京大学' => '中国/江苏南京',
        '集美大学航海学院' => '中国/福建厦门',
        '华中农业大学' => '中国/湖北武汉',
        '首都师范大学' => '中国/北京',
        '成都理工大学' => '中国/四川成都',
        '哈尔滨工程大学' => '中国/黑龙江哈尔滨',
        '佳木斯大学' => '中国/黑龙江佳木斯',
        '太原科技大学' => '中国/山西太原',
        '中北大学' => '中国/山西太原',
        '青岛大学' => '中国/山东青岛',
        '华东师范大学' => '中国/上海',
        '南京理工大学' => '中国/江苏南京',
        '中南大学岳麓山校区' => '中国/湖南长沙',
        '中南大学' => '中国/湖南长沙',
        '华中农业大学学生宿舍' => '中国/湖北武汉',
        '中南财经政法大学' => '中国/湖北武汉',
        '武汉科技大学' => '中国/湖北武汉',
        '西安科技大学' => '中国/陕西西安',
        '东北农业大学' => '中国/黑龙江哈尔滨',
        '对外经济贸易大学学生公寓' => '中国/广东广州',
        '东华大学' => '中国/上海',
        '首都科技大学' => '中国/北京',
        '长沙理工大学' => '中国/四川长沙',
        '南昌理工学院' => '中国/江西南昌',
        '华南理工大学北区北十一' => '中国/广东广州',
        '华南理工大学北区B2' => '中国/广东广州',
        '华中科技大学韵苑公寓15栋' => '中国/湖北武汉',
        '华中科技大学韵苑公寓' => '中国/湖北武汉',
        '武汉大学医学部' => '中国/湖北武汉',
        '武汉大学信息学部' => '中国/湖北武汉',
        '武汉大学工学部' => '中国/湖北武汉',
        '大连理工大学' => '中国/辽宁大连',
        '西安建筑科技大学' => '中国/陕西西安',
        '西安思源学院' => '中国/陕西西安',
        '对外经济贸易大学' => '中国/广东广州',
        'IANA机构' => '保留地址',
        'IANA保留地址' => '保留地址',
        '新加披' => '新加坡',
        '苏格兰' => '英国/苏格兰',
        '美国加利福尼亚州费里蒙CodecCloud数据中心' => '美国/加利福尼亚州费利蒙CodecCloud数据中心',
        '美国弗吉尼亚州阿什本Amazon数据中心' => '美国/弗吉尼亚州阿什本Amazon数据中心',
        '美国新泽西州皮斯卡特维Choopa数据中心' => '美国/新泽西州皮斯卡特维Choopa数据中心',
        '天津市河北区' => '中国/天津市',
    ];

    // 初始化城市.
    public static function countryInit()
    {
        $countries = [];
        foreach(self::$countries as $k => $v) {
            $countries[$k] = explode('/', $v);
        }

        return $countries;
    }

    public static $isp = [
        '中国' => ['教育网', '电信', '联通', '移动', '铁通', '广电网', '鹏博士', '长城', '阿里云', '腾讯云', '华为云', '华云数据', '微软云'],
        '中国-台湾' => ['中华电信', '亚太电信', '远传电信'],
    ];

    public static $owner = [
        // 通用
        ['cloudflare.com', 'cloudflare', '*'],
        ['microsoft.com', ['microsoft', '微软'], '*'],
        ['akamai.com', 'akamai', '*'],
        ['amazon.com', 'amazon', '*'],
        ['amazon.com', 'cloudfront', '*'],
        ['digitalocean.com', 'digitalocean', '*'],
        ['choopa.com', 'choopa', '*'],
        ['ntt.com', ['ntt网络', 'ntt通信'], '*'],
        ['he.net', 'hurricane electric', '*'],
        ['level3.com', ['level3', 'level 3'], '*'],
        ['zenlayer.com', 'zenlayer', '*'],
        ['facebook.com', 'facebook', '*'],
        ['cogentco.com', 'cogent通信', '*'],
        ['godaddy.com', 'godaddy', '*'],
        ['starhub.com', 'starhub', '*'],
        ['ovh.com', 'ovh', '*'],
        ['fiber.google.com', 'google fiber', '*'],
        ['cloud.google.com', 'google云计算', '*'],
        ['sita.aero', '国际航空电讯集团公司(sita)', '*'],
        ['aliyun.com', '阿里云', '*'],
        ['cloud.tencent.com', '腾讯云', '*'],
        ['huawei.com', '华为', '*'],
        ['cloudinnovation.org', 'cloudinnovation', '*'],
        ['att.com', ['ATT用户', 'AT&T'], '*'],
        ['edgecast.com', 'EdgeCast', '*'],
        ['cdnetworks.com', 'CDNetworks', '*'],
        ['hp.com', '惠普HP', '*'],
        ['apple.com', 'apple', '*'],
        ['fastly.com', 'Fastly', '*'],
        // 混合
        ['rixcloud.com', 'rixcloud', ['中国-香港', '美国', '日本', '英国', '俄罗斯', '巴西', '荷兰', '新加坡']],
        ['linode.com', 'linode', ['德国', '日本', '美国', '英国', '新加坡', '德国', '加拿大']],
        ['yandex.ru', 'yandex', ['俄罗斯', '荷兰', '美国', '乌克兰']],
        ['apnic.net', ['APNIC', '亚太互联网络信息中心'], ['澳大利亚', '马来西亚', '德国', '日本', '美国']],
        // 中国
        ['qingcloud.com', ['青云数据中心', '青云电信节点'], '中国'],
        ['ksyun.com', '金山云', '中国'],
        ['netease.com', '网易', ['中国', '中国-香港']],
        ['shuim.net', 'shuiM Data Exchange Center', '中国'],
        // 中国-台湾
        ['cht.com.tw', '中华电信', '中国-台湾'],
        ['so-net.net.tw', 'So-net', '中国-台湾'],
        ['tinp.net.tw', '台基科', '中国-台湾'],
        // 中国-香港
        ['pccw.com', '电讯盈科', ['中国-香港', '美国']],
        // 美国
        ['macstadium.com', 'macstadium', '美国'],
        ['riven.ee', 'rivencloud', ['美国', '中国-香港', '法国', '德国']],
        ['github.com', 'github', ['美国', '荷兰']],
        ['it7.net', 'it7', ['美国', '俄罗斯']],
        ['defense.gov', '国防部', '美国'],
        ['dod.com', 'DoD网络信息中心', '美国'],
        ['ibm.com', 'IBM公司', '美国'],
        ['comcast.com', 'Comcast通信公司', '美国'],
        ['rackspace.com', 'Rackspace Hosting公司', '美国'],
        // 新西兰
        ['vocus.co.nz', 'vocus', '新西兰'],
        // 越南
        ['hanelcom.vn', 'hanelcom', '越南'],
        ['vnpt.vn', 'VNPT', '越南'],
        // 韩国
        ['kt.com', 'kt电信', '韩国'],
        // 日本
        ['idcf.jp', 'idcf', '日本'],
        ['jcom.co.jp', 'j:com电信', '日本'],
        ['megaegg.jp', 'Energia通讯', '日本'],
        // 英国
        ['gov.uk', '社会保险安全部', '英国'],
        // 加拿大
        ['bell.ca', 'Bell', '加拿大'],
    ];

    // 初始化所属.
    public static function ownerInit()
    {
        $result = [];

        foreach(self::$owner as $v) {
            $name = $v[0];

            $kw = is_array($v[1]) ? $v[1] : [$v[1]];

            $country = is_array($v[2]) ? $v[2] : [$v[2]];

            foreach($kw as $k) {
                foreach($country as $c) {
                    if(isset($result[$c])) {
                        $result[$c] = [];
                    }

                    $result[$c][strtolower($k)] = strtolower($name);
                }
            }
        }

        return $result;
    }

    public static $rules = [
        [
            ['country_name', '美国', 'region_name', '俄克拉荷马州', 'city_name', '俄克拉荷马城'],
            ['region_name', '奥克拉荷马州', 'city_name', '奥克拉荷马城'],
        ],
        [
            ['country_name', '美国', 'region_name', '乔治亚州'],
            ['region_name', '佐治亚州'],
        ],
        [
            ['country_name', '美国', 'region_name', '得克萨斯州'],
            ['region_name', '德克萨斯州'],
        ],
        [
            ['country_name', '美国', 'region_name', '俄克拉荷马州'],
            ['region_name', '奥克拉荷马州'],
        ],
        [
            ['country_name', '美国', 'region_name', '罗德岛州'],
            ['region_name', '罗得岛州'],
        ],
        [
            ['country_name', '俄罗斯', 'region_name', '伊尔库州'],
            ['region_name', '伊尔库茨克州'],
        ],
        [
            ['country_name', '韩国', 'region_name', '首尔'],
            ['region_name', '首尔特别市'],
        ],
    ];

    private static function specialFix($ret) {
        foreach(self::$rules as $item) {
            foreach($item as $rule => $change) {
                $flag = true;

                for($i = 0; $i < count($change); $i += 2) {
                    if($ret[$change[$i]] !== $change[$i + 1]) {
                        $flag = false;
                        break;
                    }
                }

                if($flag) {
                    for($i = 0; $i < count($change); $i += 2) {
                        $ret[$change[$i]] = $change[$i + 1];
                    }
                }
            }
        }

        return $ret;
    }

    private static function matchCity($ret, $country, $area, $citys = []) {
        $iso3166 = Iso3166::init();
        if(count($citys)) {
            foreach($citys as $city) {
                if(strpos($area, $city) !== false) {
                    $ret['city_name'] = $city;
                    return $ret;
                }
            }
        }else{
            $regions = $iso3166[$country];

            foreach($regions as $region => $v) {
                foreach($v as $city) {
                    if(strpos($area, $city) !== false) {
                        $ret['region_name'] = $region;
                        $ret['city_name'] = $city;
                        return $ret;
                    }
                }
            }
        }

        return $ret;
    }

    public static function format($country, $area)
    {
        $ret = [
            'country'=> $country,
            'area' => $area,
            'country_name' => '',
            'region_name' => '',
            'city_name' => '',
            'owner_domain' => '',
            'isp' => '',
        ];

        $country = trim($country);
        $area = trim($area);

        $iso1366 = Iso3166::init();

        if(!isset($iso1366[$country])) {
            foreach(array_keys($iso1366['中国']) as $kw) {
                if(strpos($country, $kw) !== false) {
                    $area = $country . ' ' . $area;
                    $country = '中国';
                    break;
                }
            }
        }

        $countries_fix = self::countryInit();

        if(isset($countries_fix[$country])) {
            $info = $countries_fix[$country];

            $country = $info[0];

            if(count($info) === 2) {
                $area = $info[1] . ' ' . $area;
            }
        }

        if($country == '中国' && strpos($area, '大学') !== false && strpos($area, '网吧') === false) {
            $area = $area . '(教育网)';
        }

        if(isset(self::$area[$area])) {
            $area = self::$area[$area];
        }

        if(isset($iso1366[$country])) {
            $ret['country_name'] = $country;
            $ret['region_name'] = $country;
        }

        $citys = [];

        if(isset($iso1366[$country])) {
            $regions = $iso1366[$country];
            foreach ($regions as $region => $v) {
                // 这里会出现一个特殊的情况. 天津省河北区. 这个搞毛线哦. 得改掉. 来了个河北省.
                if($region !== $country && strpos($area, $region) !== false && strpos($area, $region . '区') === false) {
                    $ret['region_name'] = $region;
                    $citys = $v;
                    break;
                }
            }
        }

        if(isset($iso1366[$country])) {
            $ret = self::matchCity($ret, $country, $area, $citys);
        }

        $ret = self::specialFix($ret);

        $isp_list = self::$isp[$ret['country_name'] . '-' . $ret['region_name']] ?? (self::$isp[$ret['country_name']] ?? []);

        if($isp_list) {
            foreach($isp_list as $isp) {
                if(strpos($area, $isp) !== false ) {
                    $ret['isp'] = $isp;
                    break;
                }
            }
        }

        $owner_list = self::ownerInit();

        $owners = $owner_list[$ret['country_name'] . '-' . $ret['region_name']] ?? ($owner_list[$ret['country_name']] ?? []);

        if($owners) {
            $owners = array_merge($owners, $owner_list['*']);

            foreach($owners as $name => $domain) {
                if(strpos($area, $name) !== false) {
                    $ret['owner_domain'] = $domain;
                    break;
                }
            }
        }

        if($ret['country_name'] === '') {
            $ret['country_name'] = $country;
            $ret['region_name'] = $area;
        }

        unset($ret['country']);
        unset($ret['area']);

        return $ret;
    }
}