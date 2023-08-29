<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsUKSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'AVK CENTRIC DOUBLE FL. BUTTERFLY VALVE, PN 10/16',
            'sub_title' => 'Short, fixed EPDM liner, duplex disc, FM approved',
            'description' => 'Centric butterfly valve with fixed liner - double flanged short - duplex disc - FM approved for fire protection applications to max. 70° C
AVK centric butterfly valves with fixed liner feature an outstanding seating concept. The rubber is injection moulded directly on the valve body forming a permanent bond. Consequently, there is no risk of deformation or dislocation of the liner making the valves suitable under vacuum conditions. The combination of the profiled disc edge and the excellent AVK rubber quality ensures maximum durability of the liner.',
            'features' => 'Bonded vulcanized liner of EPDM with an excellent compression set and thus ability to regain its original shape.
Streamlined disc with minimum flow resistance.
Profiled disc edge requires minimal deformation of the liner to achieve tight sealing, and results in less wear of the liner.
Disc, shaft and conical pin of duplex steel.
Shaft bearings of PTFE coated steel.
Top shaft sealing consisting of a bronze bushing with two EPDM O-rings
Bottom shaft sealing consisting of a plug of galvanized steel with a copper sealing ring
Low torques as a result of the profiled disc edge and fixed liner design.
Ductile iron body with 200 μ epoxy coating red RAL 3000.',
            'variant_name' => 'Variant 01/70-018',
            'connection' => 'Flanged',
            'material' => 'Ductile Iron',
            'dn' => 'DN50 - DN300',
            'pn' => 'PN16',
            'closing_direction' => null,
            'url' => 'https://www.avkuk.co.uk/en-gb/product-finder/butterfly-valves/centric-butterfly-valves-with-fixed-liner/75-20-023',
            'image' => '7541_fire_p_178256.avif',
            'category' => 'Butterfly Valve',
            'country' => 'UK',
        ]);

        Product::create([
            'name' => 'AVK CENTRIC DOUBLE FL. BUTTERFLY VALVE, PN 10/16',
            'sub_title' => 'Short, fixed EPDM liner, duplex/rilsan coated disc, DN50-1000',
            'description' => 'Centric butterfly valve with fixed liner - double flanged short - duplex/rilsan coated disc for drinking water and neutral liquids to max. 110°C
AVK centric butterfly valves with fixed liner feature an outstanding seating concept. The rubber is injection moulded directly on the valve body forming a permanent bond. Consequently, there is no risk of deformation or dislocation of the liner making the valves suitable under vacuum conditions. The combination of the profiled disc edge and the excellent AVK rubber quality ensures maximum durability of the liner.',
            'features' => 'Bonded vulcanized liner of drinking water approved EPDM with an excellent compression set and thus ability to regain its original shape
Streamlined disc with minimum flow resistance
Profiled disc edge requires minimal deformation of the liner to achieve tight sealing, and results in less wear of the liner
Disc, shaft and conical pin of duplex steel in DN≤200. Disc of rilsan coated ductile iron, and shaft and conical pin of stainless steel in DN≥250
Shaft bearings of PTFE coated steel
Top shaft sealing: DN≤350: Bronze bushing with two EPDM O-rings, DN≥400: EPDM O-ring in bushing fixed with countersunk screws of galvanized steel
Bottom shaft sealing: DN≤350: Plug of galvanized steel with a copper sealing ring, DN≥400: Axial bearing and ring of alubronze and an EPDM O-ring, protected by a cover plate of galvanized steel
Low torques as a result of the profiled disc edge and fixed liner design
Ductile iron body with 200 μ epoxy coating blue RAL 5017',
            'variant_name' => 'Variant 75/20-020',
            'connection' => 'Flanged',
            'material' => 'Ductile Iron',
            'dn' => 'DN50 - DN150',
            'pn' => 'PN16',
            'closing_direction' => null,
            'url' => 'https://www.avkuk.co.uk/en-gb/product-finder/butterfly-valves/centric-butterfly-valves-with-fixed-liner/75-20-020',
            'image' => '7540_p_178085.jpg',
            'category' => 'Butterfly Valve',
            'country' => 'UK',
        ]);

        Product::create([
            'name' => 'AVK CENTRIC DOUBLE FL. BUTTERFLY VALVE, PN 10/16',
            'sub_title' => 'Long, fixed EPDM liner, duplex/rilsan coated disc, DN50-1000',
            'description' => 'Centric butterfly valve with fixed liner - double flanged long - duplex/rilsan coated disc for water and neutral liquids to max. 110°C
AVK centric butterfly valves with fixed liner feature an outstanding seating concept. The rubber is injection moulded directly on the valve body forming a permanent bond. Consequently, there is no risk of deformation or dislocation of the liner making the valves suitable under vacuum conditions. The combination of the profiled disc edge and the excellent AVK rubber quality ensures maximum durability of the liner.',
            'features' => 'Bonded vulcanized liner of drinking water approved EPDM with an excellent compression set and thus ability to regain its original shape
Streamlined disc with minimum flow resistance
Profiled disc edge requires minimal deformation of the liner to achieve tight sealing, and results in less wear of the liner
Disc, shaft and conical pin of duplex steel in DN≤200. Disc of rilsan coated ductile iron, and shaft and conical pin of stainless steel in DN≥250
Shaft bearings of PTFE coated steel
Top shaft sealing: DN≤350: Bronze bushing with two EPDM O-rings, DN≥400: EPDM O-ring in bushing fixed with countersunk screws of galvanized steel
Bottom shaft sealing: DN≤350: Plug of galvanized steel with a copper sealing ring, DN≥400: Axial bearing and ring of alubronze and an EPDM O-ring, protected by a cover plate of galvanized steel
Low torques as a result of the profiled disc edge and fixed liner design
Ductile iron body with 200 μ epoxy coating blue RAL 5017',
            'variant_name' => 'Variant 75/21-020',
            'connection' => 'Flanged',
            'material' => 'Ductile Iron',
            'dn' => 'DN50 - DN1000',
            'pn' => null,
            'closing_direction' => null,
            'url' => 'https://www.avkuk.co.uk/en-gb/product-finder/butterfly-valves/centric-butterfly-valves-with-fixed-liner/75-21-020',
            'image' => '7542_p_178086.jpg',
            'category' => 'Butterfly Valve',
            'country' => 'UK',
        ]);

        Product::create([
            'name' => 'AVK CENTRIC SEMI LUG BUTTERFLY VALVE, PN 10/16',
            'sub_title' => 'Fixed EPDM liner, duplex/rilsan coated disc',
            'description' => 'Centric butterfly valve with fixed liner - semi lug - duplex disc for water and neutral liquids to max. 110°C
AVK centric butterfly valves with fixed liner feature an outstanding seating concept. The rubber is injection moulded directly on the valve body forming a permanent bond. Consequently, there is no risk of deformation or dislocation of the liner making the valves suitable under vacuum conditions. The combination of the profiled disc edge and the excellent AVK rubber quality ensures maximum durability of the liner.',
            'features' => 'Bonded vulcanized liner of drinking water approved EPDM with an excellent compression set and thus ability to regain its original shape
Streamlined disc with minimum flow resistance
Profiled disc edge requires minimal deformation of the liner to achieve tight sealing, and results in less wear of the liner
Disc, shaft and conical pin of duplex steel in DN≤200. Disc of rilsan coated ductile iron, and shaft and conical pin of stainless steel in DN≥250
Shaft bearings of PTFE coated steel
Top shaft sealing: DN≤350: Bronze bushing with two EPDM O-rings, DN≥400: EPDM O-ring in bushing fixed with countersunk screws of galvanized steel
Bottom shaft sealing: DN≤350: Plug of galvanized steel with a copper sealing ring, DN≥400: Axial bearing and ring of alubronze and an EPDM O-ring, protected by a cover plate of galvanized steel
Low torques as a result of the profiled disc edge and fixed liner design
Ductile iron body with 200 μ epoxy coating blue RAL 5017',
            'variant_name' => 'Variant 75/31-020',
            'connection' => 'Flanged',
            'material' => 'Ductile Iron',
            'dn' => 'DN50 - DN200',
            'pn' => null,
            'closing_direction' => null,
            'url' => 'https://www.avkuk.co.uk/en-gb/product-finder/butterfly-valves/centric-butterfly-valves-with-fixed-liner/75-31-020',
            'image' => '7531_p_356558.jpg',
            'category' => 'Butterfly Valve',
            'country' => 'UK',
        ]);

        Product::create([
            'name' => 'AVK CENTRIC SEMI LUG BUTTERFLY VALVE, PN 10',
            'sub_title' => 'Fixed NBR liner, stainless steel disc',
            'description' => 'Centric butterfly valve with fixed liner - semi lug - stainless steel disc for fire protection application. FM approved
AVK centric butterfly valves with fixed liner feature an outstanding seating concept. The rubber is injection moulded directly on the valve body forming a permanent bond. Consequently, there is no risk of deformation or dislocation of the liner making the valves suitable under vacuum conditions. The combination of the profiled disc edge and the excellent AVK rubber quality ensures maximum durability of the liner.',
            'features' => 'Bonded vulcanized liner of NBR with an excellent compression set and thus ability to regain its original shape.
Streamlined disc with minimum flow resistance.
Profiled disc edge requires minimal deformation of the liner to achieve tight sealing, and results in less wear of the liner.
Shaft and disc of stainless steel AISI 431.
Shaft bearings of PTFE coated steel.
Top shaft sealing consisting of a bronze bushing with two EPDM O-rings.
Bottom shaft sealing consisting of a plug of galvanized steel with a copper sealing ring.
Low torques as a result of the profiled disc edge and fixed liner design.
Ductile iron body with PUR coating red RAL 3000.',
            'variant_name' => 'Variant 75/31-023',
            'connection' => 'Flanged',
            'material' => 'Ductile Iron',
            'dn' => 'DN50 - DN300',
            'pn' => 'PN 10/16',
            'closing_direction' => null,
            'url' => 'https://www.avkuk.co.uk/en-gb/product-finder/butterfly-valves/centric-butterfly-valves-with-fixed-liner/75-31-023',
            'image' => '7531_fire_p_178252.jpg',
            'category' => 'Butterfly Valve',
            'country' => 'UK',
        ]);

        Product::create([
            'name' => 'AVK CENTRIC FULL LUG BUTTERFLY VALVE, PN 10/16',
            'sub_title' => 'Fixed EPDM liner, duplex/rilsan coated disc, DN50-1000',
            'description' => 'Centric butterfly valve with fixed liner - full lug type - duplex/rilsan coated disc for water and neutral liquids to max. 110°C
AVK centric butterfly valves with fixed liner feature an outstanding seating concept. The rubber is injection moulded directly on the valve body forming a permanent bond. Consequently, there is no risk of deformation or dislocation of the liner making the valves suitable under vacuum conditions. The combination of the profiled disc edge and the excellent AVK rubber quality ensures maximum durability of the liner.',
            'features' => 'Bonded vulcanized liner of drinking water approved EPDM with an excellent compression set and thus ability to regain its original shape
Streamlined disc with minimum flow resistance
Profiled disc edge requires minimal deformation of the liner to achieve tight sealing, and results in less wear of the liner
Disc, shaft and conical pin of duplex steel in DN≤200. Disc of rilsan coated ductile iron, and shaft and conical pin of stainless steel in DN≥250
Shaft bearings of PTFE coated steel
Top shaft sealing: DN≤350: Bronze bushing with two EPDM O-rings, DN≥400: EPDM O-ring in bushing fixed with countersunk screws of galvanized steel
Bottom shaft sealing: DN≤350: Plug of galvanized steel with a copper sealing ring, DN≥400: Axial bearing and ring of alubronze and an EPDM O-ring, protected by a cover plate of galvanized steel
Low torques as a result of the profiled disc edge and fixed liner design
Ductile iron body with 200 μ epoxy coating blue RAL 5017',
            'variant_name' => 'Variant 75/41-020',
            'connection' => 'Flanged',
            'material' => 'Ductile Iron',
            'dn' => 'DN50 - DN1000',
            'pn' => 'PN 16',
            'closing_direction' => null,
            'url' => 'https://www.avkuk.co.uk/en-gb/product-finder/butterfly-valves/centric-butterfly-valves-with-fixed-liner/75-41-020',
            'image' => '7541_p_178090.jpg',
            'category' => 'Butterfly Valve',
            'country' => 'UK',
        ]);

        Product::create([
            'name' => 'AVK DOUBLE ECCENTRIC BUTTERFLY VALVE, PN10/16',
            'sub_title' => 'Integral seat, IP67 gearbox, plate disc, long. DN200-600',
            'description' => 'Double eccentric butterfly valve to EN 593 w. integral seat and IP67 gearbox w. handwheel and position indicator. For drinking water and neutral liquids to max. 70°C
AVK double eccentric butterfly valves are designed with tilted and fixated disc for extended service life and easy operation. The disc seal is made of AVK’s drinking water approved EPDM rubber featuring an excellent compression set and thus ability to regain its original shape. The GSK approved epoxy coating and the corrosion protected shaft end zones ensure high durability. The valves are suitable for bi-directional application.',
            'features' => 'The tilted disc releases the compression of the disc sealing after a few degrees of opening, which extends the durability and gives low operating torques
The disc is fixated to prevent wear and fluttering
The disc seal profile and rubber quality ensure low closing torques
Seal retainer ring of stainless steel
The threaded bolt holes in the disc are corrosion protected with O-rings
Machined and epoxy coated ductile iron seat integrated in the body
Shaft of stainless steel AISI 431 with self-lubricating bearings
The shaft ends are corrosion protected with a stainless steel security plate and a gasket
Replaceable shaft sealing with an EPDM O-ring on a stainless steel ring, a back-up EPDM O-ring in the housing, a flat EPDM gasket and an NBR O-ring
Optional locking device
Body and disc of ductile iron with epoxy coating to DIN 30677-2, GSK approved, RAL 5017 ',
            'variant_name' => 'Variant 756/100-104',
            'connection' => 'Flanged',
            'material' => 'Ductile Iron',
            'dn' => 'DN150 - DN600',
            'pn' => 'PN 10/16',
            'closing_direction' => 'Clockwise to Close',
            'url' => 'https://www.avkuk.co.uk/en-gb/product-finder/butterfly-valves/double-eccentric-butterfly-valves-resilient-seated/756-100-104',
            'image' => '756x_ip67_pos_indi_p_347370.jpg',
            'category' => 'Butterfly Valve',
            'country' => 'UK',
        ]);

        Product::create([
            'name' => 'AVK DOUBLE ECCENTRIC BUTTERFLY VALVE, PN10/16',
            'sub_title' => 'Integral seat, WRAS appr. sealing, ISO-input IP67 gearbox, DN700-1200, plate disc,long,AISI420 shaft',
            'description' => 'Double eccentric butterfly valve to EN 593 w. integral seat and ISO-input IP67 gearbox for drinking water and neutral liquids to max. 70°C
AVK double eccentric butterfly valves are designed with tilted and fixated disc for extended service life and easy operation. The disc seal is made of AVK’s drinking water approved EPDM rubber featuring an excellent compression set and thus ability to regain its original shape. The GSK/WRAS approved epoxy coating and fully encapsulated shaft/disc connection ensure high durability. The valves are suitable for bi-directional application.    ',
            'features' => 'The tilted disc releases the compression of the disc sealing after a few degrees of opening, which extends the durability and gives low operating torques
The disc is fixated to prevent wear and fluttering
The disc seal profile and rubber quality ensure low closing torques
Seal retainer ring of stainless steel
The threaded bolt holes in the disc are corrosion protected with O-rings
Machined and epoxy coated ductile iron seat integrated in the body
Shaft of stainless steel with self-lubricating bearings
The shaft ends are fully encapsulated in the disc and are fixed with dowels corrosion protected with O-rings and a stainless steel security plate. Key and keyway as backup.
Replaceable shaft sealing with two EPDM O-rings on each side of a bronze bushing, and a flat NBR gasket
Optional locking device
Body and disc of ductile iron with fusion bonded epoxy to DIN 30677-2, GSK approved, RAL 5017, according to WRAS-DVGW/W270/UBA',
            'variant_name' => 'Variant 756/102-017',
            'connection' => 'Flanged',
            'material' => 'Ductile Iron',
            'dn' => 'DN700 - DN1200',
            'pn' => 'PN 10/16',
            'closing_direction' => 'Clockwise to Close',
            'url' => 'https://www.avkuk.co.uk/en-gb/product-finder/butterfly-valves/double-eccentric-butterfly-valves-resilient-seated/756-102-017',
            'image' => 'iso_long_plate_int_p_178094.jpg',
            'category' => 'Butterfly Valve',
            'country' => 'UK',
        ]);

        Product::create([
            'name' => 'AVK CENTRIC LUG BUTTERFLY VALVE, PN 10/16',
            'sub_title' => 'Loose EPDM liner for drinking water, with bare shaft',
            'description' => 'Centric butterfly valve loose liner for drinking water and neutral liquids to max. 70° C
AVK centric butterfly valves with loose liner are available in wafer, lug and U-section design with a wide standard range of actuators. The butterfly valves are designed with square driven anti-blowout shaft and slim disc of acid-resistant stainless steel with machined and polished disc edges resulting in low torques.',
            'features' => 'The tilted disc releases the compression of the disc sealing after a few degrees of opening, which extends the durability and gives low operating torques
The disc is fixated to prevent wear and fluttering
The disc seal profile and rubber quality ensure low closing torques
Seal retainer ring of stainless steel
The threaded bolt holes in the disc are corrosion protected with O-rings
Machined and epoxy coated ductile iron seat integrated in the body
Shaft of stainless steel with self-lubricating bearings
The shaft ends are fully encapsulated in the disc and are fixed with dowels corrosion protected with O-rings and a stainless steel security plate. Key and keyway as backup.
Replaceable shaft sealing with two EPDM O-rings on each side of a bronze bushing, and a flat NBR gasket
Optional locking device
Body and disc of ductile iron with fusion bonded epoxy to DIN 30677-2, GSK approved, RAL 5017, according to WRAS-DVGW/W270/UBA  ',
            'variant_name' => 'Variant 820/10-029',
            'connection' => null,
            'material' => null,
            'dn' => 'DN50',
            'pn' => 'PN 16',
            'closing_direction' => 'Clockwise to Close',
            'url' => 'https://www.avkuk.co.uk/en-gb/product-finder/butterfly-valves/centric-butterfly-valves-with-loose-liner/820-10-029',
            'image' => 'lug inox disc-free shaft_retouched blue_320478.jpg',
            'category' => 'Butterfly Valve',
            'country' => 'UK',
        ]);
    }
}
