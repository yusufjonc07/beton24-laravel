<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public  $sidebar;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $usr = Yii::$app->user->identity;
        // if ($usr->workplace) {
        //     $setting = $usr->workplace->setting;
        // } else {
        //     $setting = new WorkplaceSettings();
        // }
        
        $sidebar = [];
        
        // if ($usr->role == 'ishchi_admin' && $usr->seh_id > 0) {
        //     $polya_name = 'sehni_korish';
        //     $seh_url = '/seh/view?id=' . $usr->seh_id;
        //     $hom = 'seh_ombor';
        // } else {
        //     $polya_name = 'sehlar';
        //     $seh_url = '/seh/index';
        //     $hom = 'index';
        // }
        
        $sidebar[] = [
            "section" => __('app.boshqaruv'),
            "routes" => [
                ["name" => __('app.asos_kos'), 'url' => '/korsatkich/index', 'icon' => 'pie-chart', 'type' => 'link'],
                ["name" => __('app.davomat'), 'url' => '/davomat/index', 'icon' => 'calendar', 'type' => 'link'],
                // ["name" => __('app', $polya_name), 'url' => $seh_url, 'icon' => 'copy', 'type' => 'link'],
                ["name" => __('app.mahsulotlar'), 'url' => '/type-product/index', 'icon' => 'grid', 'type' => 'link'],
                ["name" => __('app.hodimlar'), 'url' => '/users', 'icon' => 'users', 'type' => 'link'],
                // ["name" => __('app.tasischilar'), 'url' => '/founder/index', 'icon' => 'users', 'type' => 'link'],
                // ["name" => __('app.Valyutas'), 'url' => '/valyuta/index', 'icon' => 'dollar-sign', 'type' => 'link'],
                // ["name" => __('app.asosiy_vositalar'), 'url' => '/asosiy-vosita/index', 'icon' => 'anchor', 'type' => 'link'],
            ]
        ];
        
        $sidebar[] = [
            "section" => __('app.bolimlar'),
            "routes" => [
                // ["name" => __('app.crm_bolimi'), 'icon' => 'users', 'type' => 'submenu', 'items' => [
                //     ["name" => __('app.rejadagi_qongiroqlar'), 'url' => '/costumer/recall'],
                //     ["name" => __('app.kalit_sozlar'), 'url' => '/script/index'],
                //     ["name" => __('app.statistika'), 'url' => '/oyna/index'],
                // ]],
                [
                    "name" => __('app.savdo_bolimi'),
                    'icon' => 'shopping-cart',
                    'type' => 'submenu',
                    'items' => [
                        ["name" => __('app.mijozlar'), 'url' => '/costumer/index'],
                        ["name" => __('app.Anonim mijozlar'), 'url' => '/costumer/anonim'],
                        ["name" => __('app.tayyorlov'), 'url' => '/buyurtma/topshiruv'],
                        ["name" => __('app.OTK'), 'url' => '/qorovul/index'],
                        //            ["name" => __('app.yangi_mijozlar'), 'url' => '/costumer/new-costumer'],
                    ]
                ],
        
                [
                    "name" => __('app.bughalteriya'),
                    'icon' => 'book',
                    'type' => 'submenu',
                    'items' => [
                        // ["name" => __('app.kirimlar'), 'url' => '/kirim'],
                        ["name" => __('app.chiqimlar'), 'url' => '/chiqim'],
                        // ["name" => __('app.qarzlar'), 'url' => '/costumer/nasiya'],
                        // ["name" => __('app.hisobotlar'), 'url' => '/workplace/index'],
                        ["name" => __('app.Plastiklar'), 'url' => '/plastik'],
                        ["name" => __('app.bank_hisoblari'), 'url' => '/hisoblar'],
                        ["name" => __('app.kassalar'), 'url' => '/kassa/index'],
                        ["name" => __('app.Spisaniya'), 'url' => '/utilization/index'],
                    ]
                ],
        
                ["name" => __('app.Rejalashtirish'), 'url' => '/production/planning', 'icon' => 'server', 'type' => 'link'],
                ["name" => __('app.ish_ch_bolimi'), 'url' => '/production/index', 'icon' => 'server', 'type' => 'link'],
                ["name" => __('app.Joriy buyurtmalar'), 'url' => '/production/joriy', 'icon' => 'server', 'type' => 'link'],
        
                [
                    "name" => __('app.omborlar'),
                    'icon' => 'home',
                    'type' => 'submenu',
                    'items' => [
                        ["name" => __('app.tay_mah_ombori'), 'url' => '/product/index'],
                        // ["name" => __('app.hom_ombori'), 'url' => '/homashyo/' . $hom],
                        ["name" => __('app.Moddiy boyliklar'), 'url' => '/homashyo/goods'],
                        ["name" => __('app.Siloslar'), 'url' => '/silos/index'],
        
                    ]
                ],
                [
                    "name" => __('app.transport_bolimi'),
                    'icon' => 'truck',
                    'type' => 'submenu',
                    'items' => [
                        ["name" => __('app.Ko\'rsatkichlar'), 'url' => '/transport/index', 'type' => 'link'],
                        ["name" => __('app.Transportlar'), 'url' => '/transport/cars', 'type' => 'link'],
                        ["name" => __('app.Yoqilg`ilar'), 'url' => '/transport/fuels', 'type' => 'link'],
                    ]
                ],
                [
                    "name" => __('app.taminot_bolimi'),
                    'icon' => 'users',
                    'type' => 'submenu',
                    'items' => [
                        ["name" => __('app.Homashyolar'), 'url' => '/taminotchi/index', 'type' => 'link'],
                        ["name" => __('app.Mahsulotlar'), 'url' => '/product-taminotchi', 'type' => 'link'],
                    ]
                ],
                ["name" => __('app.Sms'), 'url' => '/sms-template/index', 'icon' => 'message-square', 'type' => 'link'],
            ]
        ];


        $this->sidebar = $sidebar;
        
       
       
    }

    public static function expandItems(array $items, array $icons, $includeOnly=[]){
        $iconKey = 0;
        $result = [];
        foreach ($items as $key => $item) {
            $included = true;
            if(!in_array($key, $includeOnly) && count($includeOnly) > 0){
                $included = false;
            }
            
            if($included == true){
                $item['icon'] = $icons[$iconKey];
                $item['type'] = 'link';
                $result[] = $item;
            }
            $iconKey++;
        }

        return $result;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {





        return view('components.sidebar', [
            'sidebar'=>$this->sidebar,
        ]);
    }
}
