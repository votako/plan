
<script language="JavaScript" src="lib/overlib_mini.js" type="text/javascript"></script>

<!-- main calendar program -->
<script type="text/javascript" src="calendar/calendar.js"></script>
<!-- language for the calendar -->
<script type="text/javascript" src="calendar/lang/calendar-ru_win_.js"></script>
<!-- the following script defines the Calendar.setup helper function, which makes
       adding a calendar a matter of 1 or 2 lines of code. -->
<script type="text/javascript" src="calendar/calendar-setup.js"></script>

<script type="text/javascript">
function check_checkbox(form_name)
{
    for(i=0; i<document.forms[form_name].length; i++)
    {
        if(document.forms[form_name].elements[i].type == "checkbox")
        {
            if(document.forms[form_name].elements[i].checked)
            {
                continue;
            }
            else
            {
                document.forms[form_name].elements[i].checked = 'checked';
                
            }
        }
    }
}
function submitform()
{
  document.myform.submit();
  return;
}
</script>
<!--Распечатать за: <?= $print_arr ?>-->
