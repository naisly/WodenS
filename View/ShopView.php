<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 29.01.2016
 * Time: 0:30
 */

include_once('DefaultView.php');

class ShopView extends DefaultView
{
    private $model;
    public function __construct(DefaultModel $model)
    {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getUI($category, $category_table)
    {
        $this->getItemsNames($category);
        $this->getFilterMenu();
        $this->getItems($category_table);
        $this->actionGetFooter($category);
    }

    /*
     * Getting distinct items names
     */
    private function getItemsNames($category)
    {
        echo "
                  <div class='items-row pointer' style='margin-top: -20px;'>
                       <div class='col-md-12 items-align' style='padding-left: 0; padding-right: 0; background-color: #f1f1f1; padding-bottom: 20px;'>
                            <div class='text-center'>
                                <h1 class='nav-category'>";

        if($category !== 'tv'){
            echo ucfirst($this->model->Translate("$category" . 's'));
        } else {
            echo strtoupper($this->model->Translate("$category"));
        }

        echo                    "</h1>
                            </div>
                            <ul class='text-align'>";


        echo "<a class='categories-list' href='/";

        if($_SESSION['language'] !== 'us'){
            echo $_SESSION['language'] . '/';
        }

        echo $category;

        if($category !== 'tv') {
            echo 's';
        }

        echo '/buy-' . $category;

        echo "'>" . $this->model->Translate('All') . "</a>";

        foreach ($this->model->distinct_categories as $value => $key) {
            echo "<a class='categories-list' href='{$this->model->distinct_categories[$value]}'>" . $this->model->distinct_categories[$value] . "</a>";
        }
        echo '               </ul>
                        </div>
                   </div>
              </div>';
    }

    /*
     * Filter menu
     * of product pages
     */
    private function getFilterMenu()
    {
        echo '<div class="container">
                  <div class="row">
                       <div class="col-md-3 search-box">
                            <form action="" method="get" oninput="minValue.value=min.value; maxValue.value=max.value">
                            <div class="row">
                                <div class="col-md-12 bg-item top-margin" style="margin-top: 0px;">
                                    <h class="search-item">';

        echo $this->model->Translate('Store');

        echo                       '<br/></h>
                                 </div>
                            </div>
                            <div class="spacer-for-small">';

        $k = 0;
        while ($k < count($this->model->distinct_product_names)) {

            echo '<div class="checkbox" style="margin-top: 4px;">
                              <label>
                                  <input type="checkbox" name="selected_item_' . $k . '" id="selected_item_' . $k . '" value="' . $this->model->getDistinctProductNames($k) . '"';
            if (isset($_GET['selected_item_' . $k])) echo "checked='checked'";
            echo "/>";

            echo                  '<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>' . $this->model->getDistinctProductNames($k);


            if ($this->model->getQuantityOfItems($k) == 0) {
                echo '<br />';
            } else {
                echo '(' . $this->model->getQuantityOfItems($k) . ')<br />';
            }

            echo '    </label>
                  </div>';

            $k++;
        }
        echo '            </div>
                       <div class="row">
                            <div class="col-md-12 bg-item top-margin">
                                <h class="search-item">';

        echo $this->model->Translate('Price:');

        echo                    '</h>
                             </div>
                       </div>
                       <p class="min-and-max">';

        echo $this->model->Translate('Min:');

        echo ' <output name="minValue" for="min" id="minValue">';

        if(isset($_POST['min'])){
            echo $_POST['min'];
        } else {
            echo '0';
        }

        echo          '</output><span id="symb-for-output-xs">$</span></p>
                       <input type="range" id="min" name="min" min="0" max="5000" value="';

        if(isset($_POST['min'])){
            echo $_POST['min'];
        } else {
            echo '0';
        }
        echo           '">

                       <p class="min-and-max">';

        echo $this->model->Translate('Max:');

        echo ' <output name="maxValue" for="max" id="maxValue">';

        if(isset($_POST['max'])){
            echo $_POST['max'];
        } else {
            echo '5000';
        }

        echo          '</output><span id="symb-for-output-xs">$</span></p>
                       <input type="range" id="max" name="max" min="0" max="5000" value="';

        if(isset($_POST['max'])){
            echo $_POST['max'];
        } else {
            echo '5000';
        }
        echo            '">
                       <div class="row">
                            <div class="col-md-12 bg-item top-margin">
                                <h class="search-item">';

        echo $this->model->Translate('Sort by price:');

        echo                    '</h>
                             </div>
                       </div>
                       <div class="spacer-for-small">
                            <input type="radio" name="sort_by_price" value="price " />';

        echo ' ' . $this->model->Translate('By highest');

        echo '<br />
                            <input type="radio" name="sort_by_price" value="price DESC" />';

        echo ' ' . $this->model->Translate('By lowest');

        echo '<br />
                       </div>
                       <div class="row">
                            <div class="col-md-12 bg-item top-margin">
                                <h class="search-item">';

        echo $this->model->Translate('Sort by time of adding:');

        echo                    '</h>
                             </div>
                       </div>
                       <div class="spacer-for-small">
                             <input type="radio" name="sort_by_time" value="time" />';

        echo ' ' . $this->model->Translate('By latest');

        echo '<br />
                             <input type="radio" name="sort_by_time" value="time DESC" />';

        echo ' ' . $this->model->Translate('By oldest');

        echo '<br />
                       </div>
                       <div class="row">
                            <div class="col-md-12 bg-item top-margin">
                                <h class="search-item">';

        echo $this->model->Translate('Shipping:');

        echo                    '</h>
                             </div>
                       </div>
                       <div class="spacer-for-small">
                                    <input type="radio" name="sort_by_shipping" value="shipping" />';

        echo ' ' . $this->model->Translate('By fastest');

        echo '<br />
                                    <input type="radio" name="sort_by_shipping" value="shipping DESC" />';

        echo ' ' . $this->model->Translate('By slowest');

        echo '<br />
                                    <button class="btn btn-primary" id="submit" type="submit" style="margin-bottom: 20px;">' . $this->model->Translate('Get items!') . '</button>
                       </div>
                           </form>
                        </div>';/* col-md-3 END */
    }

    /*
     * Getting items to
     * the product page
     */
    private function getItems( $current_page )
    {

        if(isset($_GET['page'])){
            $page = $_GET['page'];

            $i = ($page - 1)*6;
        } else {
            $i = 0;
        }

        if(count($this->model->id) > 6) {
            if(($i + 6) < $this->model->countId()) {
                $k = $i + 6;
            } else {
                $k = $this->model->countId();
            }
        } else {
            $k = $this->model->countId();
        }

        echo '<div id="floatingCirclesG">
                <div class="f_circleG" id="frotateG_01"></div>
                <div class="f_circleG" id="frotateG_02"></div>
                <div class="f_circleG" id="frotateG_03"></div>
                <div class="f_circleG" id="frotateG_04"></div>
                <div class="f_circleG" id="frotateG_05"></div>
                <div class="f_circleG" id="frotateG_06"></div>
                <div class="f_circleG" id="frotateG_07"></div>
                <div class="f_circleG" id="frotateG_08"></div>
            </div>';
        echo '<div class="col-md-9" id="total" style="margin-top: 40px;">';


        if($this->model->getNoDataFound() !== 1) {
            //echo $i;
            while ($i < $k) {
                echo '<div class="row" style="margin-left: 5px;';

                if ($i < ($k - 1)) {
                    echo 'border-bottom: 1px solid #e4e4e4;';
                }

                echo 'padding-bottom: 20px; margin-right: 5px;">
                    <div class="col-md-3"';
                if ($current_page === 'notebooks' || $current_page === 'television') {
                    echo 'style="margin-top: 30px"';
                }
                echo ' style="padding-left: 0 !important;">
                        <img src="/' . $this->model->getPhoto($i) . '" style="margin-top: 21px;" class="img-shop" />
                    </div>
                    <div class="col-md-5">
                            <p class="spacer"></p>
                            <a class="subdescription" href="/';

                if ($_SESSION['language'] !== 'us') {
                    echo $_SESSION['language'] . '/';
                }

                echo 'shop/subdescription?name=' . $this->model->getOriginalName($i) . '&category=' . $current_page . '&product_price=' . $this->model->getPrice($i) . '&id=' . $this->model->getId($i) . '&product_name=' . $this->model->getProductName($i) . '">' . $this->model->getOriginalName($i) . '</a>

                            <span><br />' . $this->model->Translate('by') . ' ';

                if ($this->model->getCategory($i) == 'IMac' || $this->model->getCategory($i) == 'AppleTV') {
                    echo 'Apple';
                } else if ($this->model->getCategory($i) == 'ShowTop') {
                    echo 'Amazon';
                } else {
                    echo $this->model->getCategory($i);
                }

                echo '</span>
                            <p id="price">' . $this->model->getPrice($i) . '$' . ' ' . '<span id="prev-price"><strike>' . $this->model->getPriviousPrice($i) . '$' . '</strike></span> (' . $this->model->getShipping($i) . ' ' . '';

                echo $this->model->Translate('days shipping') . ')</p>
                            <p id="on-stock">';

                echo $this->model->Translate('In stock on') . ' ';

                echo $this->model->getTimeOfAdding($i) . '</p>
                            <p id="average">';

                echo $this->model->Translate('Average price for this product:');

                echo ' <span id="prev-price">' . $this->model->getAverage($i) . '$' . '</span></p>
                            <p style="text-align: left;"><b style="font-size: 16px;">';

                echo $this->model->Translate('Short description:');

                echo ' </b>' . $this->model->getDescription($i) . '</p>
                    </div>
                    <div class="col-md-4">
                        <p class="spacer"></p>
                        <p class="align-left">';

                echo $this->model->Translate('Free shipping on orders greater than');

                echo ' <span id="prev-price">$35</span></p>
                        <p class="align-left"><b style="font-size: 16px;">';

                echo $this->model->Translate('Product features:');

                echo '</b></p>
                        <p class="align-left">' . $this->model->getFeatures($i) . '</p>
                        <form action="/';

                if ($_SESSION['language'] !== 'us') {
                    echo $_SESSION['language'] . '/';
                }

                echo 'shop/add-item" method="post">
                            <button class="btn btn-default">';

                echo $this->model->Translate('Add to cart');

                echo '</button>
                            <input type="hidden" name="id" value="' . $this->model->getId($i) . '"/>
                            <input type="hidden" name="product_name" value="' . $this->model->getProductName($i) . '"/>
                            <input type="hidden" name="category" value="' . $this->model->getCategory($i) . '"/>
                            <input type="hidden" name="photo" value="' . $this->model->getPhoto($i) . '"/>
                            <input type="hidden" name="price" value="' . $this->model->getPrice($i) . '"/>
                            <input type="hidden" name="table" value="' . $current_page . '"/>
                            <input type="hidden" name="original_name" value="' . $this->model->getOriginalName($i) . '"/>
                        </form>
                    </div>
                </div>';

                $i++;
            }
            echo ' </div>
                </div>';

            $no_page = explode("&page=", $_SERVER['REQUEST_URI']);
            if($no_page[0] == $_SERVER['REQUEST_URI']){
                $next_page = explode("?page=", $_SERVER['REQUEST_URI']);
                $url = $next_page[0];
            } else {
                $url = $no_page[0];
            }
            $find_start = strpos($_SERVER['REQUEST_URI'], '&');

            if ($this->model->countId() > 6) {
                echo '<div class="search-divider" style="margin-top: 40px;"></div>';

                echo '<div class="row" style="margin-top: 40px;">
                              <div class="col-md-3"></div>
                              <div class="col-md-6">
                                  <div class="pull-left">';

                if (isset($_GET['page']) && $_GET['page'] !== '1') {
                    echo '<a href="';

                    if (isset($_GET['page']) && $_GET['page'] > 1) {
                        if($find_start > 0) {
                            echo $url . '&page=' . ($_GET['page'] - 1);
                        } else {
                            echo $url . '?page=' . ($_GET['page'] - 1);
                        }
                    }

                    echo '">';
                }

                echo '<img src="/images/arrow-right-pages.png" width="15" height="30" class="nav-image" />';

                if (isset($_GET['page']) && $_GET['page'] !== '1') {
                    echo '</a>';
                }

                echo '</div>
                                  <div style="margin-left: 42%;">
                                      <form action="" method="get">
                                          <input type="text" name="page" id="page" class="form-control" style="padding-top: 20px !important; padding-bottom: 20px !important;" onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="';

                if (isset($_GET['page'])) {
                    echo $_GET['page'];
                } else {
                    echo '1';
                }

                echo '" />
                          <input type="submit" />
                               </form>
                               <h1 class="pages"> of ' . $this->model->getPages() . '</h1>
                                  </div>
                                  <div class="pull-right">';


                if (!isset($_GET['page']) || $_GET['page'] != $this->model->getPages()) {
                    if ($this->model->getPages() != 1) {


                        echo '<a href="';

                        if (isset($_GET['page']) && $_GET['page'] < $this->model->getPages()) {
                            if($find_start > 0) {
                                echo $url . '&page=' . ($_GET['page'] + 1);
                            } else {
                                echo $url . '?page=' . ($_GET['page'] + 1);
                            }
                        } else {
                            if($find_start > 0) {
                                echo $url . '&page=2';
                            } else {
                                echo $url . '?page=2';
                            }
                        }

                        echo '">';
                    }
                }


                echo '<img src="/images/arrow-left-pages.png" width="15" height="30" class="nav-image" />';

                if (!isset($_GET['page']) || $_GET['page'] !== $this->model->getPages()) {
                    if ($this->model->getPages() != 1) {
                        echo '</a>';
                    }
                }
            }
        } else {
            echo '<h1 class="search">Woden Sims ' . $this->model->Translate('Online Store') . '</h1>

                  <div class="search-divider"></div>

                  <h1 class="results">0 ' . $this->model->Translate('results found') . '</h1>

                  <div class="no-data-found">
                      <h1 class="no-results"><b>' . $this->model->Translate('Sorry, no results found.') . '</b></h1>
                      <h1 class="check">' . $this->model->Translate('Please, change search parameters to get any matches.') . '</h1>
                  </div>';
        }

        echo '                </div>
                              </div>
                              <div class="col-md-3"></div>
                          </div>';

    }
}