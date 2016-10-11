/**
 * Created by admin on 2016/9/18.
 */

function Dsy(){
    this.Items = {};
}
Dsy.prototype.add = function(id,iArray){
    this.Items[id] = iArray;
}
Dsy.prototype.Exists = function(id){
    if(typeof(this.Items[id]) == "undefined") return false;
    return true;
}

function change(v){
    var str="0";
    for(i=0;i<v;i++){
        str+=("_"+(document.getElementById(s[i]).selectedIndex-1));
    };
    var ss=document.getElementById(s[v]);
    with(ss){
        length = 0;
        options[0]=new Option(opt0[v],opt0[v]);
        if(v && document.getElementById(s[v-1]).selectedIndex>0 || !v){
            if(dsy.Exists(str)){
                ar = dsy.Items[str];
                for(i=0;i<ar.length;i++){
                    options[length]=new Option(ar[i].substring(ar[i].indexOf('#')+1),ar[i].substring(0,ar[i].indexOf('#')));

                }//end for
                if(v){ options[0].selected = true; }
            }
        }//end if v
        if(++v<s.length){change(v);}
    }//End with
}

var dsy = new Dsy();

dsy.add("0",[
    "1003#新能源汽车","1007#能源系统","1004#驱动及控制系统","1008#配套设施","1006#原材料","1009#其他"
]);

dsy.add("0_0",[ "100302#乘用车","100303#新能源客车","100304#低速微型车","100305#特种车","100306#商用车","100308#其他"]);
dsy.add("0_1",["100701#动力电池","100702#燃料电池","100703#超级电容","100706#BMS","100704#超高速飞轮","100707#车载发电系统","100705#其他"]);
dsy.add("0_2",["100402#电机及控制系统","100406#动力总成","100405#整车控制系统","100403#其他"]);
dsy.add("0_3",["100801#充电设备","100805#换电设备","100804#充换电站","100802#连接器件","100803#其他"]);
dsy.add("0_4",["100601#正负极材料","100603#隔膜","100604#电解液","100602#其他"]);
dsy.add("0_5",["100904#经销商","100905#传统部件","100902#检测设备","100901#生产设备","100903#展览公司"]);


var s=["s_province","s_city"];//三个select的name
var opt0 = ["主营行业","细分行业"];//初始值
function _init_area(){  //初始化函数
    for(i=0;i<s.length-1;i++){
        document.getElementById(s[i]).onchange=new Function("change("+(i+1)+")");
    }
    change(0);
}

/*2*/

function Dsy2(){
    this.Items = {};
}
Dsy2.prototype.add = function(id,iArray){
    this.Items[id] = iArray;
}
Dsy2.prototype.Exists = function(id){
    if(typeof(this.Items[id]) == "undefined") return false;
    return true;
}

function change2(v){
    var str="0";
    for(i=0;i<v;i++){
        str+=("_"+(document.getElementById(s2[i]).selectedIndex-1));
    };
    var ss2=document.getElementById(s2[v]);
    with(ss2){
        length = 0;
        options[0]=new Option(opt02[v],opt02[v]);
        if(v && document.getElementById(s2[v-1]).selectedIndex>0 || !v){
            if(dsy2.Exists(str)){
                ar = dsy2.Items[str];
                for(i=0;i<ar.length;i++){
                    options[length]=new Option(ar[i].substring(ar[i].indexOf('#')+1),ar[i].substring(0,ar[i].indexOf('#')));

                }//end for
                if(v){ options[0].selected = true; }
            }
        }//end if v
        if(++v<s2.length){change2(v);}
    }//End with
}

var dsy2 = new Dsy2();

dsy2.add("0",[
    "1008#新能源汽车","1010#能源系统","1009#驱动及控制系统","1014#配套设施","1016#原材料","1013#其他"
]);

dsy2.add("0_0",[ "100801#乘用车","100803#新能源客车","100804#低速微型车","100808#特种车","100809#商用车","100810#其他"]);
dsy2.add("0_1",["101025#动力电池","101026#燃料电池","101027#超级电容","101029#BMS","101030#车载发电系统","101022#其他"]);
dsy2.add("0_2",["100902#电机及控制系统","100907#动力总成","100908#通信系统","100903#整车控制系统","100909#功率变换器","100901#其他"]);
dsy2.add("0_3",["101401#充电设备","101402#换电设备","101403#充换电站","101404#连接器件","101408#其他"]);
dsy2.add("0_4",["101612#正极材料","101601#隔膜","101609#电解液","101613#负极材料","101611#其他"]);
dsy2.add("0_5",["101301#经销商","101302#传统部件","101303#检测设备","101304#生产设备","101305#展览公司"]);


var s2=["s_province2","s_city2"];//三个select的name
var opt02 = ["主营行业","细分行业"];//初始值
function _init_area2(){  //初始化函数
    for(i=0;i<s2.length-1;i++){
        document.getElementById(s2[i]).onchange=new Function("change2("+(i+1)+")");
    }
    change2(0);
}

/*3*/

function Dsy3(){
    this.Items = {};
}
Dsy3.prototype.add = function(id,iArray){
    this.Items[id] = iArray;
}
Dsy3.prototype.Exists = function(id){
    if(typeof(this.Items[id]) == "undefined") return false;
    return true;
}

function change3(v){
    var str="0";
    for(i=0;i<v;i++){
        str+=("_"+(document.getElementById(s3[i]).selectedIndex-1));
    };
    var ss3=document.getElementById(s3[v]);
    with(ss3){
        length = 0;
        options[0]=new Option(opt03[v],opt03[v]);
        if(v && document.getElementById(s3[v-1]).selectedIndex>0 || !v){
            if(dsy3.Exists(str)){
                ar = dsy3.Items[str];
                for(i=0;i<ar.length;i++){
                    options[length]=new Option(ar[i].substring(ar[i].indexOf('#')+1),ar[i].substring(0,ar[i].indexOf('#')));

                }//end for
                if(v){ options[0].selected = true; }
            }
        }//end if v
        if(++v<s3.length){change3(v);}
    }//End with
}

var dsy3 = new Dsy3();

dsy3.add("0",[
    "1003#新能源汽车","1007#能源系统","1004#驱动及控制系统","1008#配套设施","1006#原材料","1009#其他"
]);

dsy3.add("0_0",[ "100302#乘用车","100303#新能源客车","100304#低速微型车","100305#特种车","100306#商用车","100308#其他"]);
dsy3.add("0_1",["100701#动力电池","100702#燃料电池","100703#超级电容","100706#BMS","100704#超高速飞轮","100707#车载发电系统","100705#其他"]);
dsy3.add("0_2",["100402#电机及控制系统","100406#动力总成","100405#整车控制系统","100403#其他"]);
dsy3.add("0_3",["100801#充电设备","100805#换电设备","100804#充换电站","100802#连接器件","100803#其他"]);
dsy3.add("0_4",["100601#正负极材料","100603#隔膜","100604#电解液","100602#其他"]);
dsy3.add("0_5",["100904#经销商","100905#传统部件","100902#检测设备","100901#生产设备","100903#展览公司"]);


var s3=["s_province3","s_city3"];//三个select的name
var opt03 = ["主营行业","细分行业"];//初始值
function _init_area3(){  //初始化函数
    for(i=0;i<s3.length-1;i++){
        document.getElementById(s3[i]).onchange=new Function("change3("+(i+1)+")");
    }
    change3(0);
}



/**/