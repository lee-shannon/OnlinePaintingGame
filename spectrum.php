<?php
use \Model\ColorsDBModel;

class Controller_Spectrum extends Controller_Template
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$data = array();
        $this->template->title = 'Company Home';
        $this->template->content = View::forge('spectrum/index.php', $data);
		$this->template->css = 'style.css';
	}

	public function action_about() 
	{
		$this->template->title = "About Us";
		$this->template->content = View::forge('spectrum/milestone1/about');
        	$this->template->css = 'style.css';
	}

	public function action_color() {
		$this->template->title = "Input Form";
		$this->template->content = View::forge("spectrum/milestone1/colorForm");
		$this->template->css = 'style.css';
	}
	
	public function action_data() {
		$css = "style.css";
		$this->template->title = "Edit Colors";
		$this->template->content = View::forge('spectrum/milestone1/colorsdbviews/colorsmaincontent');
		$this->template->css = 'style.css';
        $data = array(
            'colors' => ColorsDBModel::read_colors(),
            'color_count' => ColorsDBModel::colors_count()
             );
         return Response::forge(View::forge('spectrum/milestone1/colorsdbviews/colorsmaincontent.php', $data));
    }

    public function post_data() {
	    $css = "style.css";
        if (isset($_POST['add']) && isset($_POST['colors_text'])) {
            ColorsDBModel::add_colors($_POST['colors_text']);
        }
        if (isset($_POST['delete']) && isset($_POST['colorscheck'])) {
            $checked_colors = array();
            foreach ( $_POST['colorscheck'] as $id ) {
                $checked_colors[] = $colorID;
            }
            ColorsDBModel::delete_colors($checked_colors);
        }
        $data = array(
            'colors' => ColorsDBModel::read_colors(),
           // 'colors_count' => ColorsDBModel::colors_count()
        );
        return Response::forge(View::forge('spectrum/milestone1/colorsdbviews/colorsmaincontent.php', $data));
    }

	public function get_color() {
        	//GETs the input taken from the user to $dimensions and $colors. Then based on the validity of the input, either changes the
        	//view to generator.php with the user's input, or it just appends an error message to the current view.

                $this->template->title = 'Color Form';
                $this->template->css = 'style.css';


                $dimensions = $_GET['dimensions'] ?? -100; //Please find a more elegant way to do this.
                $colors = $_GET['colorcount'] ?? -100;
                $found_err = false;
                $error_msg = "";
                $table_view = View::forge('spectrum/milestone1/empty');

                //TODO: Figure out why this isn't complaining when an empty form is submitted
                if(($dimensions > 26) || ($dimensions < 0)){
                        $found_err = true;
                        if($dimensions != -100){
                                $error_msg .= "Your input for the dimensions field must be a number between 1 and 26.\n";
                        }
                }
                if(($colors > 10) || ($colors < 0)){
                        $found_err = true;
                        if($dimensions != -100){
                                $error_msg .= "Your input for the color field must be a number between 1 and 10.\n";
                        }
                }
                if(!$found_err){
                        $table_data = array(
                                "dimensions" => $dimensions,
                                "colors" => $colors
                        );
                        $table_view = View::forge("spectrum/milestone1/generator", $table_data);
                }
                $table_data = array("table_view" => $table_view,
                                    "dimensions" => $dimensions,
                                    "colors" => $colors,
                                    "error_msg" => $error_msg);

                $this->template->content = View::forge('spectrum/milestone1/colorForm', $table_data);
    	}

	/*public function action_generator() {
		$this->template->title = "Color Table Generator";
		$this->template->content = View::forge("spectrum/milestone1/generator");
		$this->template->css = 'style.css';
	}*/

	
    	public function action_print(){
            $css = "gsstyle.css";
            $logo = $_POST['logo'];
            $name = $_POST['name'];
            $upper = $_POST['upper'];
            $lower = $_POST['lower'];
            $data = array(
                "css" => $css,
                "logo" => $logo,
                "name" => $name,
                "upper" => $upper,
                "lower" => $lower);
            $printView = View::forge("spectrum/milestone1/print.php", $data);
            return $printView;
    }
}
?>
