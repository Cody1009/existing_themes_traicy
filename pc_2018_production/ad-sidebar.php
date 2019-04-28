<!-- 広告開始　-->
<!-- ad-sidebar -->
<!-- BEGIN CRITEO CDB -->
<script async="async" type="text/javascript" src="//static.criteo.net/js/ld/publishertag.js"></script>
<div id="criteo_slot_1357661"></div>
<script>
    !function(){
        /* CONFIG CRITEO ZONE ID, SLOT DIV ID, PASSBACK */
        var criteoZoneId = 1357661;
        var criteoSlotId = "criteo_slot_1357661";
        var passback = function () {
            var div = document.getElementById(criteoSlotId);
            if (div) {
            var s = document.createElement('script'); s.setAttribute('async', ''); s.setAttribute('src', '//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'); 
            div.appendChild(s);
            /* traicy_pc_top_300_1 */
            div.innerHTML+= '<ins class="adsbygoogle" style="display:inline-block;width:300px;height:600px" data-ad-client="ca-pub-3121993718200907" data-ad-slot="7745396730"></ins>';
            (adsbygoogle = window.adsbygoogle || []).push({});
            }
        }
 
        var CriteoAdUnits = { "placements": [{ "slotid": criteoSlotId, "zoneid": criteoZoneId }]};
        window.Criteo = window.Criteo || {}; window.Criteo.events = window.Criteo.events || [];
        var processCdbBid = function() {
            var bids = Criteo.GetBidsForAdUnit(criteoSlotId);
            if (bids.length > 0) {
                var bidFound = bids[0]; Criteo.RenderAd({ bidId: bidFound.id, containerId: bidFound.impressionId });
            } else { passback(); }
        };
        Criteo.events.push(function() { Criteo.RequestBids(CriteoAdUnits, processCdbBid, 2000);});
    }();
</script>
<!-- END CRITEO CDB -->
<!-- /広告 -->
