<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type, $message;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

       foreach ($this->alertTypes as $key => $value) {
            if(session()->has($key)){
                $this->type = $key;
                $this->message = session($key);
            }
       }
       
    }

   

    public $alertTypes = [
        'error'   => 'alert-danger',
        'danger'  => 'alert-danger',
        'success' => 'alert-success',
        'info'    => 'alert-info',
        'warning' => 'alert-warning'
    ];

    public $alertIcons = [
        'error'   => 'mdi-block-helper',
        'danger'  => 'mdi-block-helper',
        'success' => 'mdi-check-all',
        'info'    => 'mdi-alert-circle-outline',
        'warning' => 'mdi-alert-outline'
    ];

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        if( $this->type &&  $this->message){
            $showing_alert = '<div class="setTimeAlert5 alert ';
            $showing_alert .= $this->alertTypes[$this->type];
            $showing_alert .= ' alert-border-left alert-dismissible fade show" role="alert"><i class="mdi '; 
            $showing_alert .=  $this->alertIcons[$this->type];
            $showing_alert .= ' align-middle me-3"></i>';
            $showing_alert .= __('app.'.$this->message);
            $showing_alert .= ' <button type="button" class="btn-close setTimeAlert5Button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    
            session()->remove($this->type);
    
            return $showing_alert;
        }else{
            return null;
        }
    }
}
