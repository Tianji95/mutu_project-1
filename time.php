  <html>
  　　<head>
  　　<title>年月日三下拉框联动</title>
  　　<meta http-equiv='Content-Type' content='text/html; charset=gb2312'>
    　</head>
  　　<body onload="YYYYMMDDstart(document.form1,document.form1.SYear,document.form1.SMonth,document.form1.SDay,document.form1.Shour,document.form1.Sminute,document.form1.Ssecond),YYYYMMDDstart(document.form1,document.form1.EYear,document.form1.EMonth,document.form1.EDay,document.form1.Ehour,document.form1.Eminute,document.form1.Esecond),YYYYMMDDstart(document.form2,document.form2.SYear,document.form2.SMonth,document.form2.SDay,document.form2.Shour,document.form2.Sminute,document.form2.Ssecond),YYYYMMDDstart(document.form2,document.form2.EYear,document.form2.EMonth,document.form2.EDay,document.form2.Ehour,document.form2.Eminute,document.form2.Esecond),YYYYMMDDstart(document.form3,document.form3.SYear,document.form3.SMonth,document.form3.SDay,document.form3.Shour,document.form3.Sminute,document.form3.Ssecond),YYYYMMDDstart(document.form3,document.form3.EYear,document.form3.EMonth,document.form3.EDay,document.form3.Ehour,document.form3.Eminute,document.form3.Esecond)">
  <strong>姓名</strong>　
  </br>
  <strong>---------------------------------------------------------------------------------------------------</strong>
  </br>
  <strong>有空时间：</strong>
  </br>
  <form name=form1>
  　　 起始时间：
  　　 <select name=SYear onchange="YYYYDD(this.value,document.form1.SMonth,document.form1.SDay)">
  　　 <option value="">年</option>
  　　 </select>年
  　　 <select name=SMonth onchange="MMDD(this.value,document.form1.SYear,document.form1.SDay)">
  　　 <option value="">月</option>
  　　 </select>月
  　　 <select name=SDay>
  　　 <option value="">日</option>
  　　 </select>日
  	   <select name = Shour>
       <option value = "">时</option>
       </select>时
       <select name = Sminute>
       <option value = "">分</option>
       </select>分
       <select name = Ssecond>
       <option value = "">秒</option>
       </select>秒
        <br><br>
  　　 完成时间：
  　　 <select name=EYear onchange="YYYYDD(this.value,document.form1.EMonth,document.form1.EDay)">
  　　 <option value="">年</option>
  　　 </select>年
  　　 <select name=EMonth onchange="MMDD(this.value,document.form1.EYear,document.form1.EDay)">
  　　 <option value="">月</option>
  　　 </select>月
  　　 <select name=EDay>
  　　 <option value="">日</option>
  　　 </select>日
  	   <select name = Ehour>
       <option value = "">时</option>
       </select>时
       <select name = Eminute>
       <option value = "">分</option>
       </select>分
       <select name = Esecond>
       <option value = "">秒</option>
       </select>秒
  　　</form>
  </br>
  </br>
    　 <form name=form2>
  　　 起始时间：
  　　 <select name=SYear onchange="YYYYDD(this.value,document.form2.SMonth,document.form2.SDay)">
  　　 <option value="">年</option>
  　　 </select>年
  　　 <select name=SMonth onchange="MMDD(this.value,document.form2.SYear,document.form2.SDay)">
  　　 <option value="">月</option>
  　　 </select>月
  　　 <select name=SDay>
  　　 <option value="">日</option>
  　　 </select>日
  	   <select name = Shour>
       <option value = "">时</option>
       </select>时
       <select name = Sminute>
       <option value = "">分</option>
       </select>分
       <select name = Ssecond>
       <option value = "">秒</option>
       </select>秒
        <br><br>
  　　 完成时间：
  　　 <select name=EYear onchange="YYYYDD(this.value,document.form2.EMonth,document.form2.EDay)">
  　　 <option value="">年</option>
  　　 </select>年
  　　 <select name=EMonth onchange="MMDD(this.value,document.form2.EYear,document.form2.EDay)">
  　　 <option value="">月</option>
  　　 </select>月
  　　 <select name=EDay>
  　　 <option value="">日</option>
  　　 </select>日
  	   <select name = Ehour>
       <option value = "">时</option>
       </select>时
       <select name = Eminute>
       <option value = "">分</option>
       </select>分
       <select name = Esecond>
       <option value = "">秒</option>
       </select>秒
  　　</form>
  </br>
  </br>
    　<form name=form3>
  　　 起始时间：
  　　 <select name=SYear onchange="YYYYDD(this.value,document.form3.SMonth,document.form3.SDay)">
  　　 <option value="">年</option>
  　　 </select>年
  　　 <select name=SMonth onchange="MMDD(this.value,document.form3.SYear,document.form3.SDay)">
  　　 <option value="">月</option>
  　　 </select>月
  　　 <select name=SDay>
  　　 <option value="">日</option>
  　　 </select>日
  	   <select name = Shour>
       <option value = "">时</option>
       </select>时
       <select name = Sminute>
       <option value = "">分</option>
       </select>分
       <select name = Ssecond>
       <option value = "">秒</option>
       </select>秒
        <br><br>
  　　 完成时间：
  　　 <select name=EYear onchange="YYYYDD(this.value,document.form3.EMonth,document.form3.EDay)">
  　　 <option value="">年</option>
  　　 </select>年
  　　 <select name=EMonth onchange="MMDD(this.value,document.form3.EYear,document.form3.EDay)">
  　　 <option value="">月</option>
  　　 </select>月
  　　 <select name=EDay>
  　　 <option value="">日</option>
  　　 </select>日
  	   <select name = Ehour>
       <option value = "">时</option>
       </select>时
       <select name = Eminute>
       <option value = "">分</option>
       </select>分
       <select name = Esecond>
       <option value = "">秒</option>
       </select>秒
       </br>
       <input type="submit" name="button" id="button" value="提交" />
  　　</form>
  
  　　<script language="JavaScript"><!--
  　　function YYYYMMDDstart(form,year,month,day,hour,minute,second)
  　　{
  　　 	MonHead = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
  　　 	//先给年下拉框赋内容
  　　 	var y = new Date().getFullYear();
  　　 	for (var i = y; i < (y+10); i++) //以今年为准，前30年，后30年
  　　 	year.options.add(new Option(i,i));
  　　 	//赋月份的下拉框
  　　 	for (var i = 1; i < 13; i++)
  　　 		month.options.add(new Option(i,i));
  　　 	year.value = y;
  　　 	month.value = new Date().getMonth() + 1;
  　　 	var n = MonHead[new Date().getMonth()];
  　　 	if (new Date().getMonth() ==1 && IsPinYear(year.options[year.selectedIndex].value)) n++;
  　　 	writeDay(n,day); //赋日期下拉框
  　　 	day.value = new Date().getDate();
  
		for(var i = 0; i < 24; i++)
			hour.options.add(new Option(i,i));
  　　	for(var i = 0; i < 60; i++)
  			minute.options.add(new Option(i,i));
		for(var i = 0; i < 60; i++)
			second.options.add(new Option(i,i));
		var thour = new Date().getHours();
		hour.value = thour;
		
		var tminute = new Date().getMinutes();
		minute.value = tminute;
		
		var tsecond = new Date().getSeconds();
		second.value = tsecond;
  	  }
  　　function YYYYDD(str,month,day) //年发生变化时日期发生变化(主要是判断闰平年)
  　　{
  　　 	var MMvalue = month.options[month.selectedIndex].value;
  　　 	if (MMvalue == "" ){ var e = day; optionsClear(e); return;}
  　　 	var n = MonHead[MMvalue - 1];
  　　 	if (MMvalue ==2 && IsPinYear(str)) n++;
  　　 	writeDay(n,day)
  　　}
  　　function MMDD(str,year,day) //月发生变化时日期联动
  　　{
  　　 	var YYYYvalue = year.options[year.selectedIndex].value;
  　　 	if (YYYYvalue == "" ){ var e = day; optionsClear(e); return;}
  　　 	var n = MonHead[str - 1];
  　　 	if (str ==2 && IsPinYear(YYYYvalue)) n++;
  　　 	writeDay(n,day)
  　　}
  　　function writeDay(n,day) //据条件写日期的下拉框
  　　{
  　　 	var e = day; optionsClear(e);
  　　 	for (var i=1; i<(n+1); i++)
  　　 	e.options.add(new Option(i,i));
  　　}
  　　function IsPinYear(year)//判断是否闰平年
  　　{ 
  		return(0 == year%4 && (year%100 !=0 || year%400 == 0));
	  }
  　　function optionsClear(e)
  　　{
  　　 	for (var i=e.options.length; i>0; i--)
  　　 	e.remove(i);
  　　}
  　　function compDate(SY,SM,SD,EY,EM,ED)
  　　{
  　　}
　　 //--></script>
　　</body>
　　</html>