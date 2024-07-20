<script src="/js/js10.js" type="text/javascript"></script>
<script>
    var CONFIG = {
        "TOKEN": "{{csrf_token()}}",
        "TABLE":{
            "run"           :   1,
            "splash_max"    :   4,
            "countpage"     :   0,
            "search_status" :   0,
            "search_text"   :   "",
            "sort"          :   1
        },
        "APP"   : {
            "URL"   : "{{$APPS['BASE_URL']}}"
        }
    }
</script>