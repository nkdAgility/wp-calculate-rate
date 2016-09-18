# wp-calculate-rate
Plugin to help you calculate your rate in Wordpress

Addds the [nkd-calculate] shorcode.

##Usage

[nkd-calculate evaluate=" [types field="current"][/types] / [types field="total"][/types] * 100 "]

[nkd-calculate evaluate=" 100/4 "]

Rate for public per user

[nkd-calculate evaluate="([nkd-rate]/2)*[types field="days"][/types]"]

rate for Private with 10 students

[nkd-calculate evaluate="(([nkd-rate]*2)*[types field="days"][/types])+([types field="bulkset"]*10)"]

#Notes

Uses: http://ship.getherbert.com
