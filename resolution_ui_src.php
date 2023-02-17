<?php
namespace app\forms;

use std, gui, framework, app;


class settings_resolution extends AbstractForm
{

    /**
     * @event btn_set_1920.click-Left 
     */
    function Set_1920_Btn(UXMouseEvent $e = null)
    {    
        $this->form('main')->width = 1920;
        $this->form('main')->height = 1032;        
        $this->form('main')->x = 0;
        $this->form('main')->y = 0;             
        //меню пуск
        $this->form('main')->start_btn->x = 935;
        $this->form('main')->start_btn->y = 984;   
        $this->form('main')->fragment_start->x = 752; 
        $this->form('main')->fragment_start->y = 640;  
        $this->form('main')->user_name_label->x = 784;
        $this->form('main')->user_name_label->y = 928; 
        $this->form('main')->start_window->x = 760;
        $this->form('main')->start_window->y = 648; 
        //виджет времени
        if ($this->Pizdec->visible)
        {
        $this->form('main')->time_window->x = 1624;
        $this->form('main')->time_window->y = 680;  
        $this->form('main')->time_frame->x = 1824;
        $this->form('main')->time_frame->y = 976;          
        $this->form('main')->hh_mm->x = 1728;
        $this->form('main')->hh_mm_ss->x = 1704;  
        $this->form('main')->dd_mm_yyyy->x = 1688;              
        $this->form('main')->hh_mm->y = 752;
        $this->form('main')->hh_mm_ss->y = 800;  
        $this->form('main')->dd_mm_yyyy->y = 848;             
        }
                 
        //докажем пользователю что стоит такое разрешение
        $this->btn_set_1920->textColor = ('#20ba20');
        if ($this->btn_set_1600->textColor = ('#20ba20'))
        {
            $this->btn_set_1600->textColor = ('#000000');            
        }    
        if ($this->btn_set_1280->textColor = ('#20ba20'))
        {
            $this->btn_set_1280->textColor = ('#000000');            
        } 
        if ($this->btn_set_1024->textColor = ('#20ba20'))
        {
            $this->btn_set_1024->textColor = ('#000000');            
        }                                  
        //debug log  
        if ($this->form('main')->debug_log->visible) {
        Element::appendText($this->form('main')->debug_log, "used function 'Set_1920_Btn' \n");}                              
    }

    /**
     * @event btn_set_1600.click-Left 
     */
    function Set_1600_Btn(UXMouseEvent $e = null)
    {
        $this->form('main')->width = 1600;
        $this->form('main')->height = 904; 
        $this->form('main')->x = 0;
        $this->form('main')->y = 0;         
        //меню пуск
        $this->form('main')->start_btn->x = 776;
        $this->form('main')->start_btn->y = 856;   
        $this->form('main')->fragment_start->x = 592; 
        $this->form('main')->fragment_start->y = 512; 
        $this->form('main')->user_name_label->x = 624;
        $this->form('main')->user_name_label->y = 800;
        $this->form('main')->start_window->x = 600;
        $this->form('main')->start_window->y = 520; 
        //виджет времени
        if ($this->Pizdec->visible)
        {        
        $this->form('main')->time_window->x = 1304;
        $this->form('main')->time_window->y = 552;  
        $this->form('main')->time_frame->x = 1504;
        $this->form('main')->time_frame->y = 848;          
        $this->form('main')->hh_mm->x = 1408;
        $this->form('main')->hh_mm_ss->x = 1384;  
        $this->form('main')->dd_mm_yyyy->x = 1368;              
        $this->form('main')->hh_mm->y = 624;
        $this->form('main')->hh_mm_ss->y = 672;  
        $this->form('main')->dd_mm_yyyy->y = 720;   
        }                    
        //докажем пользователю что стоит такое разрешение
        $this->btn_set_1600->textColor = ('#20ba20');
        if ($this->btn_set_1920->textColor = ('#20ba20'))
        {
            $this->btn_set_1920->textColor = ('#000000');            
        }    
        if ($this->btn_set_1280->textColor = ('#20ba20'))
        {
            $this->btn_set_1280->textColor = ('#000000');            
        } 
        if ($this->btn_set_1024->textColor = ('#20ba20'))
        {
            $this->btn_set_1024->textColor = ('#000000');            
        }                         
        //debug log  
        if ($this->form('main')->debug_log->visible) {
        Element::appendText($this->form('main')->debug_log, "used function 'Set_1600_Btn' \n");}                                 
    }

    /**
     * @event btn_set_1280.click-Left 
     */
    function Set_1280_Btn(UXMouseEvent $e = null)
    {
        $this->form('main')->width = 1280;
        $this->form('main')->height = 1024; 
        $this->form('main')->x = 0;
        $this->form('main')->y = 0;           
        //меню пуск
        $this->form('main')->start_btn->x = 615;
        $this->form('main')->start_btn->y = 976;   
        $this->form('main')->fragment_start->x = 432; 
        $this->form('main')->fragment_start->y = 632;  
        $this->form('main')->user_name_label->x = 464;
        $this->form('main')->user_name_label->y = 920; 
        $this->form('main')->start_window->x = 440;
        $this->form('main')->start_window->y = 640; 
        //виджет времени
        if ($this->Pizdec->visible)
        {        
        $this->form('main')->time_window->x = 984;
        $this->form('main')->time_window->y = 672;  
        $this->form('main')->time_frame->x = 928;
        $this->form('main')->time_frame->y = 712;          
        $this->form('main')->hh_mm->x = 1088;
        $this->form('main')->hh_mm_ss->x = 1064;  
        $this->form('main')->dd_mm_yyyy->x = 1048;              
        $this->form('main')->hh_mm->y = 752;
        $this->form('main')->hh_mm_ss->y = 800;  
        $this->form('main')->dd_mm_yyyy->y = 848;    
        }             
        //докажем пользователю что стоит такое разрешение
        $this->btn_set_1280->textColor = ('#20ba20');
        if ($this->btn_set_1920->textColor = ('#20ba20'))
        {
            $this->btn_set_1920->textColor = ('#000000');            
        }    
        if ($this->btn_set_1600->textColor = ('#20ba20'))
        {
            $this->btn_set_1600->textColor = ('#000000');            
        }  
        if ($this->btn_set_1024->textColor = ('#20ba20'))
        {
            $this->btn_set_1024->textColor = ('#000000');            
        }                        
        //debug log  
        if ($this->form('main')->debug_log->visible) {
        Element::appendText($this->form('main')->debug_log, "used function 'Set_1280_Btn' \n");}                             
    }

    /**
     * @event btn_set_1024.click-Left 
     */
    function Set_1024_Btn(UXMouseEvent $e = null)
    {    
        $this->form('main')->width = 1024;
        $this->form('main')->height = 768;          
        $this->form('main')->x = 0;
        $this->form('main')->y = 0;  
        //меню пуск  
        $this->form('main')->start_btn->x = 487;
        $this->form('main')->start_btn->y = 720; 
        $this->form('main')->fragment_start->x = 304; 
        $this->form('main')->fragment_start->y = 376;
        $this->form('main')->user_name_label->x = 336;
        $this->form('main')->user_name_label->y = 664;    
        $this->form('main')->start_window->x = 312;
        $this->form('main')->start_window->y = 384;  
        //виджет времени
        if ($this->Pizdec->visible)
        {        
        $this->form('main')->time_window->x = 728;
        $this->form('main')->time_window->y = 416;  
        $this->form('main')->time_frame->x = 928;
        $this->form('main')->time_frame->y = 712;          
        $this->form('main')->hh_mm->x = 832;
        $this->form('main')->hh_mm_ss->x = 808;  
        $this->form('main')->dd_mm_yyyy->x = 792;              
        $this->form('main')->hh_mm->y = 488;
        $this->form('main')->hh_mm_ss->y = 536;  
        $this->form('main')->dd_mm_yyyy->y = 584;   
        }                  
        //докажем пользователю что стоит такое разрешение
        $this->btn_set_1024->textColor = ('#20ba20');   
        if ($this->btn_set_1920->textColor = ('#20ba20'))
        {
            $this->btn_set_1920->textColor = ('#000000');            
        }    
        if ($this->btn_set_1600->textColor = ('#20ba20'))
        {
            $this->btn_set_1600->textColor = ('#000000');            
        }  
        if ($this->btn_set_1280->textColor = ('#20ba20'))
        {
            $this->btn_set_1280->textColor = ('#000000');            
        }                                                               
    }
}