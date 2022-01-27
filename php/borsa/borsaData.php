<?php
        $url = "https://canlidoviz.com/";
        
try{
    $icerik = @file_get_contents($url);
}catch(Exception $e){
	//hata var ise burada yakalanır
    echo "sda0";
    echo "mesaj -> ".$e->getMessage(); //hata çıktısı üretilir
}
        $fiyatlarsayisi = getir('<div class="value primary hoverable">','</div>',$icerik);
        $dolareuro = getir('<div class="value primary">','</div>',$icerik);
        function getir($baslangic, $son, $cekilmek_istenen)
        {
            @preg_match_all('@' . $baslangic .
            '(.*?)'. $son.'@si', $cekilmek_istenen, $m);
            return @$m;
        }
        
    if(@$dolareuro[0][0] !="" && @$fiyatlarsayisi[0][0] !=""){
            $dolar= trim($dolareuro[0][0] , '<div class="value primary">
            <span class="badget" title="Alış Fiyatı" aria-label="Alış Fiyatı">A</span>
            <span>');
            $euro= trim($dolareuro[0][1] , '<div class="value primary">
            <span class="badget" title="Alış Fiyatı" aria-label="Alış Fiyatı">A</span>
            <span>');
            $eurousd= trim($dolareuro[0][2] , '<div class="value primary">
            <span class="badget" title="Alış Fiyatı" aria-label="Alış Fiyatı">A</span>
            <span>');

            $ilk= trim($fiyatlarsayisi[0][0] , "<div class='value primary hoverable'><span>,</span> <!----></div>");
            $ilk1= trim( $ilk , '"value primary hoverable">');
            $ilkkriptofiyat = explode (".",$ilk1);


            $ikinci= trim($fiyatlarsayisi[0][1] , "<div class='value primary hoverable'><span>,</span> <!----></div>");
            $ikinci2= trim( $ikinci , '"value primary hoverable">');
            $ikincikriptofiyat = explode (".",$ikinci2);

            $ucuncu= trim($fiyatlarsayisi[0][2] , "<div class='value primary hoverable'><span>,</span> <!----></div>");
            $ucuncu3= trim( $ucuncu , '"value primary hoverable">');
            $ucuncukriptofiyat = explode (",",$ucuncu3);

            $dorduncu= trim($fiyatlarsayisi[0][3] , "<div class='value primary hoverable'><span>,</span> <!----></div>");
            $dorduncu4= trim( $dorduncu , '"value primary hoverable">');
            $dorduncukriptofiyat = explode (".",$dorduncu4);
    } else{
        $dolar = "";
        $euro = "";
        $eurousd = "";
        $ilkkriptofiyat[0] = "";
        $ikincikriptofiyat[0] = "";
        $ucuncukriptofiyat[0] = "";
        $dorduncukriptofiyat[0] = "";
        echo "bos";
    }
            
?>