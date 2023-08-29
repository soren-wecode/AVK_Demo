<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsDKSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'AVK SUPA PLUS™ SKYDEVENTIL, PN16',
            'description' => 'Trækfaste koblinger til PE- og uPVC-rør, med spindelovergang, DN40-300',
            'variant_name' => 'Variant 01/70-018',
            'connection' => 'Muffeender',
            'material' => 'Duktiljern',
            'dn' => 'DN40 - DN300',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/01-70-018',
            'image' => '0170_0035_p_184837.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK MUFFEVENTIL, PN16',
            'description' => 'Til uPVC-rør, med spindelovergang, DN50-400',
            'variant_name' => 'VARIANT 01/80-038',
            'connection' => 'Muffeender',
            'material' => 'Duktiljern',
            'dn' => 'DN40 - DN400',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/01-80-038',
            'image' => '0180_038_p_184838.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL, PN10/16',
            'description' => 'Lang byggelængde DIN F5, med spindelovergang, DN50-500',
            'variant_name' => 'VARIANT 02/60-0038',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN50 - DN500',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/02-60-0038',
            'image' => '02-60-0038 p_184843.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL, PN10/16',
            'description' => 'Kort byggelængde DIN F4, DN450-600',
            'variant_name' => 'VARIANT 06/30-0035',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN450 - DN600',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/06-30-0035',
            'image' => 'gate_valve_flanged_water_06_30_dn100_600_184847.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL, PN10/16',
            'description' => 'Kort byggelængde DIN F4, med spindelovergang, DN40-400',
            'variant_name' => 'VARIANT 06/30-0038',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN40 - DN400',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/06-30-0038',
            'image' => '0630_038_p_184848.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL, PN10/16',
            'description' => 'Kort byggelængde DIN F4, DN700-1200',
            'variant_name' => 'VARIANT 06/30-029',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN700 - DN1200',
            'pn' => 'PN10/16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/06-30-029',
            'image' => 'gate_valve_flanged_bypass_06_30_029_302106.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL, PN10/16',
            'description' => 'Kort byggelængde DIN F4, 1.4404/AISI 316L spindel, DN300-600',
            'variant_name' => 'VARIANT 06/34-0035',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN300 - DN600',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/06-34-0035',
            'image' => 'gate_valve_flanged_water_06_30_dn100_600_184847 (1).avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL, PN10/16',
            'description' => 'Kort byggelængde DIN F4, rustfri syrefast 316 spindel, spindelovergang, DN40-250',
            'variant_name' => 'VARIANT 06/34-0038',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN40 - DN250',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/06-34-0038',
            'image' => '0630_038_p_184848.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL, PN10/16',
            'description' => 'Kort byggelængde DIN F4, 1.4404/AISI 316 spindel, DN700-1000',
            'variant_name' => 'VARIANT 06/34-006',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN700 - DN1000',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/06-34-006',
            'image' => 'gate_valve_flanged_bypass_06_30_029_302106.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL, PN10/16',
            'description' => 'Kort byggelængde DIN F4, med positions indikator og håndhjul, DN50-400',
            'variant_name' => 'VARIANT 06/35-003',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN50 - DN300',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/06-35-003',
            'image' => 'gate_valve_position_indicator_water_06_35_006_177673.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL, PN10/16',
            'description' => 'VdS godkendt, kort byggelængde DIN F4, positionsindikator og håndhjul, DN50-400',
            'variant_name' => 'VARIANT 06/35-013',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN50 - DN400',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/06-35-013',
            'image' => 'gate_valve_position_indicator_fire_06_35_013_178245.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK "GROOVED ENDS" SKYDEVENTIL, PN16',
            'description' => 'VdS godkendt, med positionsindikator og håndhjul, DN50-300',
            'variant_name' => 'VARIANT 06/37-003',
            'material' => 'Duktiljern',
            'dn' => 'DN50 - DN300',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/06-37-003',
            'image' => 'gate_valve_grooved_ends_fire_06_37_003_177676.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL, PN10/16',
            'description' => 'Kort byggelængde DIN F4, AISI 316 spindel, bronze CC499K skydermøtrik, DN40-600',
            'variant_name' => 'VARIANT 06/44-0035',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN40 - DN600',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/06-44-0035',
            'image' => 'gate_valve_flanged_water_06_30_dn100_600_184847.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK PREMIUM 100 FLANGEVENTIL, PN10/16',
            'description' => 'EN 558-2 S.14/DIN F4, med spindelovergang, duplex spindel, ECO BRASS skydermøtrik, 300 µm epoxy/udvendig PUR-belægning, DN40-600',
            'variant_name' => 'VARIANT 06/52-018',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN40 - DN600',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/06-52-018',
            'image' => '0652 stem cap_490685.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL, PN10/16',
            'description' => 'Kort byggelængde DIN F4, udskiftelig spindelpakning, NBR, DN40-600',
            'variant_name' => 'VARIANT 06/70-003',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN40 - DN600',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/06-70-003',
            'image' => 'gate_valve_flanged_gas_06_70_003_177694.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL, PN10/16',
            'description' => 'Kort byggelængde DIN F4, NBR, DN40-600',
            'variant_name' => 'VARIANT 06/80-0035',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN40 - DN600',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/06-80-0035',
            'image' => 'gate_valve_flanged_water_06_30_dn100_600_184847.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL, PN10/16',
            'description' => 'Kort byggelængde DIN F4, 1.4404/AISI 316L spindel, NBR, DN40-600',
            'variant_name' => 'VARIANT 06/84-0035',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN40 - DN600',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/06-84-0035',
            'image' => 'gate_valve_flanged_water_06_30_dn100_600_184847.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL OS&Y, PN10/16',
            'description' => 'Kort byggelængde DIN F4 (DN350-400 S.3/BS), stigende spindel og håndhjul, DN50-400',
            'variant_name' => 'VARIANT 06/89-003',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN50 - DN400',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/06-89-003',
            'image' => '06-89_p_1_235303.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK BY-PASS SKYDEVENTIL, DN80, PN16',
            'description' => 'Til store dimensioner af AVK serie 06 skydeventiler',
            'variant_name' => 'VARIANT 126/99-001',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN80',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/dele-til-bloedtaettende-skydeventiler/126-99-001',
            'image' => '06-126-99-001 p_358509.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL, NRS, 250 PSI/17,2 BAR',
            'description' => 'ANSI cl. 150 flangeboring, UL/FM-godkendt, spindelovergang, DN65-200',
            'variant_name' => 'VARIANT 145/40-001',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN65 - DN200',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/145-40-001',
            'image' => '145-40 blue ctc_235206.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL, OS&Y, 250 PSI/17,2 BAR',
            'description' => 'ANSI cl. 150 flangeboring, UL/FM-godkendt, rød, DN65-200',
            'variant_name' => 'VARIANT 145/46-001',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN65 - DN200',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/145-46-001',
            'image' => '145_x6_2_399600.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL, NRS, 250 PSI/17,2 BAR',
            'description' => 'PN10/16 flangeboring, UL/FM-godkendt, spindelovergang, DN65-200',
            'variant_name' => 'VARIANT 145/50-001',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN65 - DN200',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/145-50-001',
            'image' => '145-40 blue ctc_235206.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL, OS&Y, 250 PSI/17,2 BAR',
            'description' => 'PN10/16 flangeboring, UL/FM-godkendelse, DN65-200',
            'variant_name' => 'VARIANT 145/56-001',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN65 - DN200',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/145-56-001',
            'image' => '145_x6_2_399600.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL FOR AKTUATOR, PN10/16',
            'description' => 'Kort byggelængde DIN F4, ISO topflange, EPDM, DN40-400',
            'variant_name' => 'VARIANT 15/42-0035',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN40 - DN400',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
            'url' => 'https://www.avkventiler.dk/da-dk/produktsoeger/skydeventiler/bloedtaettende-hovedledningsventiler/15-42-0035',
            'image' => '1542_0035_p_177758.avif',
            'category' => 'Gate Valves',
            'country' => 'DK',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL FOR AKTUATOR, PN10/16',
            'description' => 'Kort byggelængde DIN F4, ISO topflange, NBR, DN40-400',
            'variant_name' => 'VARIANT 15/42-006',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN40 - DN400',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
        ]);

        Product::create([
            'name' => 'AVK KOMBIKRYDS, 4-VEJS, PN10/16',
            'description' => 'Flanger, DN100 centerudtag med blindflange, DN100-300',
            'variant_name' => 'VARIANT 18/70-005',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN100 - DN300',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
        ]);

        Product::create([
            'name' => 'AVK KOMBIKRYDS, 4-VEJS, PN10/16',
            'description' => 'Flanger, DN80 centerudtag med blindflange, DN100-300',
            'variant_name' => 'VARIANT 18/70-006',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN100 - DN300',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
        ]);

        Product::create([
            'name' => 'AVK KOMBIKRYDS, 3-VEJS, PN10/16',
            'description' => 'Flanger, DN100 centerudtag med blindflange, DN100-300',
            'variant_name' => 'VARIANT 18/80-005',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN100 - DN300',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
        ]);

        Product::create([
            'name' => 'AVK KOMBIKRYDS, 3-VEJS, PN10/16',
            'description' => 'Flanger, DN80 centerudtag med blindflange, DN100-300',
            'variant_name' => 'VARIANT 18/80-006',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN100 - DN300',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
        ]);

        Product::create([
            'name' => 'AVK SKYDEVENTIL MED SPIDSENDER, PN16',
            'description' => 'Til støbejernsrør iht. ISO 2531/EN 545, med spindelovergang, DN80-300',
            'variant_name' => 'VARIANT 32/40-018',
            'connection' => 'Spidsender',
            'material' => 'Duktiljern',
            'dn' => 'DN80 - DN300',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
        ]);

        Product::create([
            'name' => 'AVK VENTILFUNDAMENT',
            'description' => 'Til AVK ventiler med PE-rørender',
            'variant_name' => 'VARIANT 36/15-001',
            'connection' => 'Flange x PE-rørende',
            'material' => 'Stål',
            'dn' => 'DN25 - DN100',
        ]);

        Product::create([
            'name' => 'AVK PREMIUM 100 SKYDEVENTIL MED PE-ENDER, PN10',
            'description' => 'Blå SDR17/PE100 kapperør, med spindelovergang, duplex spindel, ECO BRASS skydermøtrik, 300 µm epoxy/udvendig PUR-belægning, DN65-400',
            'variant_name' => 'VARIANT 36/52-138',
            'connection' => 'PE-rørender',
            'material' => 'Duktiljern',
            'dn' => 'DN65 - DN400',
            'pn' => 'PN10',
            'closing_direction' => 'Højrelukkende',
        ]);

        Product::create([
            'name' => 'AVK SKYDEVENTIL MED PE-ENDER, PN10',
            'description' => 'Kapperør, SDR17/PE100, med spindelovergang, spindel i rustfri syrefast stål, 1.4404 (AISI 316L), DN65-400',
            'variant_name' => 'VARIANT 36/75-137',
            'connection' => 'PE-rørender',
            'material' => 'Duktiljern',
            'dn' => 'DN65 - DN400',
            'pn' => 'PN10',
            'closing_direction' => 'Højrelukkende',
        ]);

        Product::create([
            'name' => 'AVK SKYDEVENTIL MED PE-ENDER, PN10',
            'description' => 'Sort/blå SDR17/PE100 rør, med spindelovergang, spindel i rustfri syrefast stål, 1.4404 (AISI 316L)',
            'variant_name' => 'VARIANT 36/79-127',
            'connection' => 'PE-rørender',
            'material' => 'Duktiljern',
            'dn' => 'DN65 - DN400',
            'pn' => 'PN10',
            'closing_direction' => 'Højrelukkende',
        ]);

        Product::create([
            'name' => 'AVK SKYDEVENTIL MED PE-ENDER, PN10',
            'description' => 'Sort/blå SDR17/PE100 rør, med spindelovergang, DN65-500',
            'variant_name' => 'VARIANT 36/80-127',
            'connection' => 'PE-rørender',
            'material' => 'Duktiljern',
            'dn' => 'DN65 - DN500',
            'pn' => 'PN10',
            'closing_direction' => 'Højrelukkende',
        ]);

        Product::create([
            'name' => 'AVK SKYDEVENTIL MED PE-ENDER, PN10',
            'description' => 'Kapperør, SDR17/PE100, med spindelovergang, DN65-400',
            'variant_name' => 'VARIANT 36/80-137',
            'connection' => 'PE-rørender',
            'material' => 'Duktiljern',
            'dn' => 'DN65 - DN400',
            'pn' => 'PN10',
            'closing_direction' => 'Højrelukkende',
        ]);

        Product::create([
            'name' => 'AVK SKYDEVENTIL MED PE-ENDER, PN16',
            'description' => 'Kapperør, SDR11/PE100, med spindelovergang, DN65-400',
            'variant_name' => 'VARIANT 36/80-147',
            'connection' => 'PE-rørender',
            'material' => 'Duktiljern',
            'dn' => 'DN65 - DN400',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
        ]);

        Product::create([
            'name' => 'AVK SKYDEVENTIL MED PE-ENDER, PN16',
            'description' => 'SDR 11/PE100 ender, med spindelovergang, NBR skyder, DN80-400',
            'variant_name' => 'VARIANT 36/83-001',
            'connection' => 'PE-rørender',
            'material' => 'Duktiljern',
            'dn' => 'DN65 - DN400',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
        ]);

        Product::create([
            'name' => 'AVK SKYDEVENTIL MED PE-ENDER, PN10',
            'description' => 'Orange SDR11 PE100/PE100-RC rørender, udskiftelig spindelpakning, NBR, DN65-400',
            'variant_name' => 'VARIANT 36/90-170',
            'connection' => 'PE-rørender',
            'material' => 'Duktiljern',
            'dn' => 'DN80 - DN400',
            'pn' => 'PN10',
            'closing_direction' => 'Højrelukkende',
        ]);

        Product::create([
            'name' => 'AVK SKYDEVENTIL MED FLANGE/PE-ENDE, PN10',
            'description' => 'Sort/blå SDR17/PE 100 rørende, med spindelovergang, DN50-200',
            'variant_name' => 'VARIANT 38/80-127',
            'connection' => 'Flange x PE-rørende',
            'material' => 'Duktiljern',
            'dn' => 'DN50 - DN200',
            'pn' => 'PN10',
            'closing_direction' => 'Højrelukkende',
        ]);

        Product::create([
            'name' => 'AVK SKYDEVENTIL MED FLANGE/PE-ENDE, PN10',
            'description' => 'Orange SDR11 PE100/PE100-RC rørende, udskiftelig spindelpakning, NBR, DN50-200',
            'variant_name' => 'VARIANT 38/90-118',
            'connection' => 'Flange x PE-rørende',
            'material' => 'Duktiljern',
            'dn' => 'DN50 - DN200',
            'pn' => 'PN10',
            'closing_direction' => 'Højrelukkende',
        ]);

        Product::create([
            'name' => 'AVK SKYDEVENTIL MED STÅLSVEJSEENDER, PN16',
            'description' => 'Til gas stålrør, udskiftelig spindelpakning, NBR, DN50-300',
            'variant_name' => 'VARIANT 46/70-005',
            'connection' => 'Stålsvejsede ender',
            'material' => 'Støbestål',
            'dn' => 'DN50 - DN300',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
        ]);

        Product::create([
            'name' => 'AVK SKYDEVENTIL MED STÅLSVEJSEENDER, PN16',
            'description' => 'Til gas stålrør, udvendig PUR-coating, udskiftelig spindelpakning, NBR, DN50-600',
            'variant_name' => 'VARIANT 46/70-010',
            'connection' => 'Stålsvejsede ender',
            'material' => 'Støbestål',
            'dn' => 'DN50 - DN600',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
        ]);

        Product::create([
            'name' => 'AVK SUPA MAXI™ SKYDEVENTIL, PN16',
            'description' => 'Universale trækfaste koblinger til alle rørtyper, med spindelovergang, DN80-300',
            'variant_name' => 'VARIANT 636/00-008',
            'connection' => 'Supa Maxi™ kobling',
            'material' => 'Duktiljern',
            'dn' => 'DN80 - DN300',
            'pn' => 'PN16',
            'closing_direction' => 'Højrelukkende',
        ]);

        Product::create([
            'name' => 'AVK SKYDEVENTIL MED SUPA MAXI™-/PE-ENDE, PN10',
            'description' => 'Supa Maxi™ universal trækfast koblingsende/PE-ende med spindelovergang, sort/blå SDR17 PE100-rør, DN80-300',
            'variant_name' => 'VARIANT 638/00-127',
            'connection' => 'Supa Maxi™ kobling',
            'material' => 'Duktiljern',
            'dn' => 'DN80 - DN300',
            'pn' => 'PN10',
            'closing_direction' => 'Højrelukkende',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL MED AKTUATOR, PN10',
            'description' => 'Kort byggelængde DIN F4, dobbeltvirkende pneumatisk aktuator, komplet, DN65-350',
            'variant_name' => 'VARIANT 715/30-003',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN65 - DN300',
            'pn' => 'PN10',
        ]);

        Product::create([
            'name' => 'AVK FLANGEVENTIL MED AKTUATOR, PN10',
            'description' => 'Kort byggelængde DIN F4, dobbeltvirkende pneumatisk aktuator, inkl. endestopaftastere og afdækningsskinner, DN65-350',
            'variant_name' => 'VARIANT 715/30-004',
            'connection' => 'Med flanger',
            'material' => 'Duktiljern',
            'dn' => 'DN65 - DN300',
            'pn' => 'PN10',
        ]);
    }
}
