<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = new Product();
        $product->id = "1";
        $product->name = "Intel Core I7 13700k";
        $product->image = "product_images/01.jpg";
        $product->description = "• 16 (8P+8E) Cores
        • 24 Threads
        • CPU Cooler NOT Included
        • Intel UHD Graphics 770
        • PCIe 5.0 and 4.0";
        $product->price = 15700;
        $product->brand = "Intel";
        $product->category = "CPU";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "2";
        $product->name = "Intel Core I5 12600K";
        $product->description = "• 10 (6P+4E) Cores
        • 16 Threads 
        • Intel UHD Graphics 770
        • CPU Cooler Not Included
        • PCIe 5.0 and 4.0";
        $product->price = 10900;
        $product->brand = "Intel";
        $product->category = "CPU";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "3";
        $product->name = "Intel Core i9-11900K";
        $product->description = "• 8 Cores
        • 16 Threads
        • CPU Cooler Not Included
        • Intel UHD Graphics 750
        • PCIe 4.0";
        $product->price = 16900;
        $product->brand = "Intel";
        $product->category = "CPU";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "4";
        $product->name = "Intel Core i9-10900K";
        $product->description = "• CORES 10
        • THREADS 20
        • 5.30 GHz";
        $product->price = 18400;
        $product->brand = "Intel";
        $product->category = "CPU";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "5";
        $product->name = "AMD Ryzen 9 5950X";
        $product->description = "• 16 Cores
        • 32 Threads
        • CPU Cooler not Included
        • Discrete Graphics Required, No Integrated Graphics
        • PCIe 4.0";
        $product->price = 17900;
        $product->brand = "AMD";
        $product->category = "CPU";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "6";
        $product->name = "AMD Ryzen 7 5800X";
        $product->description = "• 8 Cores
        • 16 Threads
        • CPU Cooler NOT Included
        • Discrete Graphics Required, No Integrated Graphics
        • PCIe 4.0";
        $product->price = 8390;
        $product->brand = "AMD";
        $product->category = "CPU";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "7";
        $product->name = "AMD Ryzen 5 5600x";
        $product->description = "• 6 Cores
        • 12 Threads
        • Discrete Graphics Required, No Integrated Graphics
        • PCIe 4.0";
        $product->price = 5490;
        $product->brand = "AMD";
        $product->category = "CPU";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "8";
        $product->name = "AMD Ryzen 9 5900X";
        $product->description = "• 12 Cores
        • 24 Threads
        • CPU Cooler not Included
        • Discrete Graphics Required, No Integrated Graphics
        • PCIe 4.0";
        $product->price = 15700;
        $product->brand = "AMD";
        $product->category = "CPU";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "9";
        $product->name = "Razer DeathAdder Elite";
        $product->description = "True 16,000 DPI optical sensor
        Up to 450 IPS / 50 g acceleration
        Razer Mechanical Mouse switches
        7 independently programmable Hyperesponse buttons";
        $product->price = 1390;
        $product->brand = "Razer";
        $product->category = "Gameing-Gear";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "10";
        $product->name = "RAZER MAMBA ELITE";
        $product->description = "• 16 (8P+8E) Cores
        • 24 Threads
        • CPU Cooler NOT Included
        • Intel UHD Graphics 770
        • PCIe 5.0 and 4.0";
        $product->price = 2490;
        $product->brand = "Razer";
        $product->category = "Gameing-Gear";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "11";
        $product->name = "Razer BlackWidow V3";
        $product->description = "• Switch : Razer Green Mechanical Switches
        • Lighting : RGB
        • Keycap Font : English/Thai
        • Connectivity : USB Type-A (Wired)";
        $product->price = 3490;
        $product->brand = "Razer";
        $product->category = "Gameing-Gear";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "12";
        $product->name = "Razer Gaming Keyboard Ornata V3 X";
        $product->description = "• Membrane
        • RGB LED
        • English / Thai Keycap
        • ANSI
        • Wired USB";
        $product->price = 1290;
        $product->brand = "Razer";
        $product->category = "Gameing-Gear";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "13";
        $product->name = "HyperX Cloud II";
        $product->description = "• 30%
        • 2.4GHz 
        • 20m";
        $product->price = 3090;
        $product->brand = "Hyper X";
        $product->category = "Gameing-Gear";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "14";
        $product->name = "SteelSeries Arctis 7";
        $product->description = "Driver Unit	40mm.
        Headphone Frequency Response	20 - 20kHz
        Headphone Input Impedance	32 Ohms
        Headphone Sensitivity	98dB
        Connector	Jack 3.5mm/USB";
        $product->price = 5990;
        $product->brand = "Intel";
        $product->category = "Gameing-Gear";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "15";
        $product->name = "Logitech G Pro X";
        $product->description = "• Headset Response : 20 Hz - 20000 Hz
        • Mic Response : 100 Hz - 10000 Hz";
        $product->price = 4490;
        $product->brand = "Intel";
        $product->category = "Gameing-Gear";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "16";
        $product->name = "Razer Nari Ultimate";
        $product->description = "HEADSET RESPONSE : 20 Hz - 20000 Hz
        MIC RESPONSE : 100 Hz - 65000 Hz";
        $product->price = 8190;
        $product->brand = "Intel";
        $product->category = "Gameing-Gear";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "17";
        $product->name = "NVIDIA GeForce RTX 3090";
        $product->description = "Chipset Manufacturer	NVIDIA GeForce
        GPU	GeForce RTX 3090 Ti
        Core Clock	1560 MHz
        Boost Clock	1920 MHz
        Stream Processors	10752 Units";
        $product->price = 15700;
        $product->brand = "NVIDIA";
        $product->category = "GPU";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "18";
        $product->name = "NVIDIA GeForce RTX 3080";
        $product->description = "Chipset Manufacturer	NVIDIA GeForce
        GPU	GeForce RTX 3090 Ti
        Core Clock	1560 MHz
        Boost Clock	1920 MHz
        Stream Processors	10752 Units";
        $product->price = 15700;
        $product->brand = "NVIDIAl";
        $product->category = "GPU";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "19";
        $product->name = "AMD Radeon RX 6900 XT";
        $product->description = "Chipset Manufacturer	AMD Radeon
        GPU	Radeon RX 6900 XT
        Core Clock	2015 MHz
        Boost Clock	2340 MHz
        Stream Processors	5120 Units
        Memory Clock	16.0 Gbps
        Memory Size	16 GB";
        $product->price = 25900;
        $product->brand = "AMD";
        $product->category = "GPU";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "20";
        $product->name = "NVIDIA GeForce RTX 3070";
        $product->description = "Chipset Manufacturer	NVIDIA GeForce
        GPU	GeForce RTX 3090 Ti
        Core Clock	1560 MHz
        Boost Clock	1920 MHz
        Stream Processors	10752 Units";
        $product->price = 10900;
        $product->brand = "NVIDIA";
        $product->category = "GPU";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "21";
        $product->name = "AMD Radeon RX 6800 XT";
        $product->description = "Chipset Manufacturer	AMD Radeon
        GPU	Radeon RX 6800 XT
        Core Clock	1825 MHz
        Boost Clock	2310 MHz
        Stream Processors	4608 Units
        Memory Clock	16.0 Gbps";
        $product->price = 44200;
        $product->brand = "AMD";
        $product->category = "GPU";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "22";
        $product->name = "NVIDIA GeForce RTX 3060 Ti";
        $product->description = "Chipset Manufacturer	NVIDIA GeForce
        GPU	GeForce RTX 3090 Ti
        Core Clock	1560 MHz
        Boost Clock	1920 MHz
        Stream Processors	10752 Units";
        $product->price = 7999;
        $product->brand = "NVIDIA";
        $product->category = "GPU";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "23";
        $product->name = "AMD Radeon RX 6700 XT";
        $product->description = "GPU : AMD Radeon RX 6700
        GPU Clock : 2321 MHz (OC up to 2424 MHz )
        CUDA Core : 2560
        Video Memory: GDDR6 12GB";
        $product->price = 9600;
        $product->brand = "AMD";
        $product->category = "GPU";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "24";
        $product->name = "NVIDIA GeForce GTX 1660 Super";
        $product->description = "Memory Size : 6GB
        Memory Type : GDDR6
        Memory Interface : 192-bit
        Bus Interface : PCI Express 3.0
        Output : HDMI x 1, DisplayPort x 3";
        $product->price = 7450;
        $product->brand = "NVIDIA";
        $product->category = "GPU";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "25";
        $product->name = "Seagate Barracuda";
        $product->description = "Capacity : 1 TB
        Rotational Speed : 7200 RPM
        Interface : SATA III
        Form Factor : 3.5";
        $product->price = 1050;
        $product->brand = "Intel";
        $product->category = "Harddisk";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "26";
        $product->name = "Western Digital Blue";
        $product->description = "Capacity : 1 TB
        Rotational Speed : 7200 RPM
        Interface : SATA III
        Form Factor : 3.5";
        $product->price = 1090;
        $product->brand = "Intel";
        $product->category = "Harddisk";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "27";
        $product->name = "Seagate IronWolf";
        $product->description = "Capacity : 1 TB
        Rotational Speed : 5900 RPM
        Interface : SATA III
        Form Factor : 3.5";
        $product->price = 1090;
        $product->brand = "Intel";
        $product->category = "Harddisk";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "28";
        $product->name = "Western Digital Black";
        $product->description = "Capacity : 1 TB
        Rotational Speed : 7200 RPM
        Interface : SATA III
        Form Factor : 3.5";
        $product->price = 3200;
        $product->brand = "Intel";
        $product->category = "Harddisk";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "29";
        $product->name = "Toshiba P300";
        $product->description = "Capacity : 1 TB
        Rotational Speed : 7200 RPM
        Interface : SATA III
        Form Factor : 3.5";
        $product->price = 1030;
        $product->brand = "Intel";
        $product->category = "Harddisk";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "30";
        $product->name = "Seagate FireCuda";
        $product->description = "Capacity : 1 TB
        Rotation Speed : 7200 RPM
        Category : Performance
        NAND Flash : 8GB MLC NAND";
        $product->price = 2590;
        $product->brand = "Intel";
        $product->category = "Harddisk";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "31";
        $product->name = "Western Digital Red";
        $product->description = "Capacity : 1 TB
        Rotational Speed : 7200 RPM
        Interface : SATA III
        Form Factor : 3.5";
        $product->price = 3500;
        $product->brand = "Intel";
        $product->category = "Harddisk";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "32";
        $product->name = "HGST Ultrastar";
        $product->description = "• 16 (8P+8E) Cores
        • 24 Threads
        • CPU Cooler NOT Included
        • Intel UHD Graphics 770
        • PCIe 5.0 and 4.0";
        $product->price = 1700;
        $product->brand = "Intel";
        $product->category = "Harddisk";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "33";
        $product->name = "ASUS ROG Strix B550-F";
        $product->description = "• AMD AM4
        • AMD B550
        • 4 x DDR4 DIMM
        • ATX";
        $product->price = 7290;
        $product->brand = "ASUS";
        $product->category = "Mainboard";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "34";
        $product->name = "MSI MPG B550 Gaming Carbon WiFi";
        $product->description = "• AMD AM4
        • AMD B550
        • 4 x DDR4 DIMM
        • ATX";
        $product->price = 7000;
        $product->brand = "Intel";
        $product->category = "Mainboard";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "35";
        $product->name = "GIGABYTE Aorus X570 Elite";
        $product->description = "• AMD AM4
        • AMD X570
        • 4 x DDR4 DIMM
        • ATX";
        $product->price = 7090;
        $product->brand = "Intel";
        $product->category = "Mainboard";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "36";
        $product->name = "ASUS ROG Crosshair VIII Hero";
        $product->description = "• AMD AM4
        • AMD X570
        • 4 x DDR4 DIMM
        • ATX";
        $product->price = 15700;
        $product->brand = "ASUS";
        $product->category = "Mainboard";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "37";
        $product->name = "MSI MAG B550 Tomahawk";
        $product->description = "• AMD AM4
        • AMD B550
        • 4 x DDR4 DIMM
        • ATX";
        $product->price = 5390;
        $product->brand = "Intel";
        $product->category = "Mainboard";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "38";
        $product->name = "ASRock B550M Steel Legend";
        $product->description = "• AMD B550
        • DDR4, 4 x DIMM
        • 1 x DisplayPort
        • 1 x HDMI
        • 2 x M.2 socket";
        $product->price = 3990;
        $product->brand = "Intel";
        $product->category = "Mainboard";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "39";
        $product->name = "ASUS Prime B450M-A/CSM";
        $product->description = "Model :PRIME B450M-K
        CPU Support :AMD AM4 Socket AMD Ryzen™ 2nd";
        $product->price = 2999;
        $product->brand = "Intel";
        $product->category = "Mainboard";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "40";
        $product->name = "GIGABYTE B450 AORUS Elite";
        $product->description = "• AMD AM4
        • AMD B450
        • 4 x DDR4 DIMM
        • ATX";
        $product->price = 2890;
        $product->brand = "Intel";
        $product->category = "Mainboard";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "41";
        $product->name = "Corsair Vengeance LPX";
        $product->description = "• 16GB (8GBx2)
        • DDR4
        • 3200MHz
        • CMK16GX4M2B3200C16";
        $product->price = 2950;
        $product->brand = "Intel";
        $product->category = "RAM";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "42";
        $product->name = "G.Skill Trident Z RGB";
        $product->description = "• 16GB (8GBx2)
        • DDR4
        • 3200MHz
        • F4-3200C16D-16GTZR";
        $product->price = 2190;
        $product->brand = "Intel";
        $product->category = "RAM";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "43";
        $product->name = "Crucial Ballistix";
        $product->description = "Module densities up to 16GB
        Speeds up to 3000 MT/s
        Battle-tested design and performance";
        $product->price = 1700;
        $product->brand = "Intel";
        $product->category = "RAM";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "44";
        $product->name = "Kingston HyperX Predator";
        $product->description = "• 16GB (8GBx2)
        • DDR4
        • 3200MHz
        • HX432C16PB3AK2/16";
        $product->price = 2000;
        $product->brand = "Intel";
        $product->category = "RAM";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "45";
        $product->name = "Crucial Ballistix Max";
        $product->description = "Module densities up to 16GB
        Speeds up to 3000 MT/s
        Battle-tested design and performance";
        $product->price = 2150;
        $product->brand = "Intel";
        $product->category = "RAM";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "46";
        $product->name = "Team Group T-Force Xtreem";
        $product->description = "•Full mirror light penetration
        Latest ARGB technology
        Aluminum alloy heat sink with high performance
        Supports Intel & AMD motherboards";
        $product->price = 1990;
        $product->brand = "Intel";
        $product->category = "RAM";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "47";
        $product->name = "Patriot Viper Steel";
        $product->description = "• 32GB (16GBx2)
        • DDR4
        • 3200MHz";
        $product->price = 2590;
        $product->brand = "Intel";
        $product->category = "RAM";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "48";
        $product->name = "Corsair Dominator Platinum RGB";
        $product->description = "Capacity : 16 GB
        Speed : 3200 MHz
        Part Number : CMT16GX4M2C3200C16
        8GBx2',";
        $product->price = 6800;
        $product->brand = "Intel";
        $product->category = "RAM";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "49";
        $product->name = "ASUS ROG Swift PG279QZ";
        $product->description = "• 16 (8P+8E) Cores
        • 24 Threads
        • CPU Cooler NOT Included
        • Intel UHD Graphics 770
        • PCIe 5.0 and 4.0";
        $product->price = 15700;
        $product->brand = "ASUS";
        $product->category = "Display";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "50";
        $product->name = "Dell Alienware AW3418DW";
        $product->description = "Size : 34.14
        Brightness : 300 cd/m²
        Contrast : 1000 : 1
        Response Time : 4 ms";
        $product->price = 32000;
        $product->brand = "Intel";
        $product->category = "Display";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "51";
        $product->name = "LG OLED C1";
        $product->description = "• 16 (8P+8E) Cores
        • 24 Threads
        • CPU Cooler NOT Included
        • Intel UHD Graphics 770
        • PCIe 5.0 and 4.0";
        $product->price = 34500;
        $product->brand = "Intel";
        $product->category = "Display";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "52";
        $product->name = "Acer Predator X27";
        $product->description = "'Size : 27
        Brightness : 400 cd/m²
        Contrast : 100000000 : 1
        Response Time : 1 ms";
        $product->price = 15700;
        $product->brand = "Intel";
        $product->category = "Display";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "53";
        $product->name = "SteelSeries QcK";
        $product->description = "DIMENSION 930 X 300 X 3 MM";
        $product->price = 1090;
        $product->brand = "Intel";
        $product->category = "Display";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "54";
        $product->name = "Corsair MM300";
        $product->description = "DIMENSION 340 X 280 X 1 MM";
        $product->price = 450;
        $product->brand = "Intel";
        $product->category = "Display";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "55";
        $product->name = "Logitech G240";
        $product->description = "• 16 (8P+8E) Cores
        • 24 Threads
        • CPU Cooler NOT Included
        • Intel UHD Graphics 770
        • PCIe 5.0 and 4.0";
        $product->price = 400;
        $product->brand = "Intel";
        $product->category = "Display";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "56";
        $product->name = "Razer Goliathus";
        $product->description = "Dimension 294 x 920 x 3 mm";
        $product->price = 1090;
        $product->brand = "Razer";
        $product->category = "Display";
        $product->quantity = "100";
        $product->save();

    }
}