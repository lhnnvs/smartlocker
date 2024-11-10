<?php
$title = "Transactions";
include PATH . "partials/sidebar.php"
?>

    <div class="px-4 overflow-auto" style="max-height: calc(100vh - 100px);">
        <div class="row g-3">
            <div class="col-12">
                <div class="bg-white p-4 rounded shadow-sm">
                    <div class="d-flex justify-content-between mb-1 w-100">
                        <div class="d-flex gap-2">
                            <div class="fw-bold">Showing:</div>
                            <div class="text-decoration-underline">All (64)</div>
                        </div>
                        <input type="text" class="form-control border-secondary me-4" placeholder="⌕ Search" style="width: 200px;">
                    </div>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>Locker</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Size</th>
                                <th>Amount</th>
                                <th>Total</th>
                                <th>Hours</th>
                                <th>Date</th>
                                <th>Start</th>
                                <th>End</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>James Smith</td>
                                <td>09182735467</td>
                                <td>Medium</td>
                                <td>P50</td>
                                <td>P50</td>
                                <td>1 Hour</td>
                                <td>12/08/2024</td>
                                <td>7:12 PM</td>
                                <td>8:12 PM</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Emily Johnson</td>
                                <td>09174928356</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P60</td>
                                <td>3 Hours</td>
                                <td>12/08/2024</td>
                                <td>12:50 PM</td>
                                <td>3:50 PM</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Michael Brown</td>
                                <td>09321648759</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P20</td>
                                <td>2 Hours</td>
                                <td>12/08/2024</td>
                                <td>10:03 AM</td>
                                <td>12:03 PM</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Sarah Davis</td>
                                <td>09282364517</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P20</td>
                                <td>1 Hour</td>
                                <td>12/07/2024</td>
                                <td>6:58 PM</td>
                                <td>7:58 PM</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>David Miller</td>
                                <td>09146278354</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P40</td>
                                <td>2 Hours</td>
                                <td>12/07/2024</td>
                                <td>4:12 PM</td>
                                <td>6:12 PM</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Jessica Wilson</td>
                                <td>09217564839</td>
                                <td>Medium</td>
                                <td>P50</td>
                                <td>P150</td>
                                <td>3 Hours</td>
                                <td>12/07/2024</td>
                                <td>2:09 PM</td>
                                <td>5:09 PM</td>
                            </tr>
                            <tr>
                                <td>004</td>
                                <td>Robert Moore</td>
                                <td>09368154720</td>
                                <td>Large</td>
                                <td>P100</td>
                                <td>P100</td>
                                <td>1 Hour</td>
                                <td>12/07/2024</td>
                                <td>11:47 AM</td>
                                <td>12:47 PM</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>John Anderson</td>
                                <td>09274315820</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P40</td>
                                <td>2 Hours</td>
                                <td>12/07/2024</td>
                                <td>10:25 AM</td>
                                <td>12:25 PM</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Sophia Thomas</td>
                                <td>09357294618</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P20</td>
                                <td>1 Hour</td>
                                <td>12/06/2024</td>
                                <td>7:31 PM</td>
                                <td>8:31 PM</td>
                            </tr>
                            <tr>
                                <td>004</td>
                                <td>William Jackson</td>
                                <td>09180423567</td>
                                <td>Large</td>
                                <td>P100</td>
                                <td>P100</td>
                                <td>1 Hour</td>
                                <td>12/06/2024</td>
                                <td>5:08 PM</td>
                                <td>6:08 PM</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Isabella White</td>
                                <td>09234967152</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P20</td>
                                <td>1 Hour</td>
                                <td>12/06/2024</td>
                                <td>3:39 PM</td>
                                <td>4:39 PM</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Daniel Harris</td>
                                <td>09182576349</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P40</td>
                                <td>2 Hours</td>
                                <td>12/06/2024</td>
                                <td>1:01 PM</td>
                                <td>3:01 PM</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Mia Martin</td>
                                <td>09350827164</td>
                                <td>Medium</td>
                                <td>P50</td>
                                <td>P100</td>
                                <td>2 Hours</td>
                                <td>12/06/2024</td>
                                <td>10:56 AM</td>
                                <td>12:56 PM</td>
                            </tr>
                            <tr>
                                <td>004</td>
                                <td>Joseph Clark</td>
                                <td>09173184602</td>
                                <td>Large</td>
                                <td>P100</td>
                                <td>P100</td>
                                <td>1 Hour</td>
                                <td>12/05/2024</td>
                                <td>6:42 PM</td>
                                <td>7:42 PM</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Charlotte Lewis</td>
                                <td>09268945713</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P40</td>
                                <td>2 Hours</td>
                                <td>12/05/2024</td>
                                <td>3:27 PM</td>
                                <td>5:27 PM</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Thomas Young</td>
                                <td>09287456139</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P60</td>
                                <td>3 Hours</td>
                                <td>12/05/2024</td>
                                <td>12:03 PM</td>
                                <td>3:03 PM</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Lily Walker</td>
                                <td>09124537864</td>
                                <td>Medium</td>
                                <td>P50</td>
                                <td>P50</td>
                                <td>1 Hour</td>
                                <td>12/05/2024</td>
                                <td>10:47 AM</td>
                                <td>11:47 AM</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Charles Hall</td>
                                <td>09213687529</td>
                                <td>Medium</td>
                                <td>P50</td>
                                <td>P50</td>
                                <td>1 Hour</td>
                                <td>12/04/2024</td>
                                <td>7:18 PM</td>
                                <td>8:18 PM</td>
                            </tr>
                            <tr>
                                <td>004</td>
                                <td>Ava Allen</td>
                                <td>09365871420</td>
                                <td>Large</td>
                                <td>P100</td>
                                <td>P100</td>
                                <td>1 Hour</td>
                                <td>12/04/2024</td>
                                <td>5:50 PM</td>
                                <td>6:50 PM</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Mark King</td>
                                <td>09182637450</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P40</td>
                                <td>2 Hours</td>
                                <td>12/04/2024</td>
                                <td>3:36 PM</td>
                                <td>5:36 PM</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Emma Scott</td>
                                <td>09243756182</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P40</td>
                                <td>2 Hours</td>
                                <td>12/04/2024</td>
                                <td>1:19 PM</td>
                                <td>3:19 PM</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Richard Green</td>
                                <td>09319874562</td>
                                <td>Medium</td>
                                <td>P50</td>
                                <td>P150</td>
                                <td>3 Hours</td>
                                <td>12/04/2024</td>
                                <td>11:01 AM</td>
                                <td>2:01 PM</td>
                            </tr>
                            <tr>
                                <td>004</td>
                                <td>Grace Adams</td>
                                <td>09256174830</td>
                                <td>Large</td>
                                <td>P100</td>
                                <td>P200</td>
                                <td>2 Hours</td>
                                <td>12/03/2024</td>
                                <td>6:15 PM</td>
                                <td>8:15 PM</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Anthony Baker</td>
                                <td>09163784290</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P40</td>
                                <td>2 Hours</td>
                                <td>12/03/2024</td>
                                <td>3:04 PM</td>
                                <td>5:04 PM</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Chloe Nelson</td>
                                <td>09249865371</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P20</td>
                                <td>1 Hour</td>
                                <td>12/03/2024</td>
                                <td>12:32 PM</td>
                                <td>1:32 PM</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Paul Carter</td>
                                <td>09321650873</td>
                                <td>Medium</td>
                                <td>P50</td>
                                <td>P100</td>
                                <td>2 Hours</td>
                                <td>12/03/2024</td>
                                <td>10:10 AM</td>
                                <td>12:10 PM</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Madison Perez</td>
                                <td>09187436250</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P20</td>
                                <td>1 Hour</td>
                                <td>12/02/2024</td>
                                <td>7:02 PM</td>
                                <td>8:02 PM</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>George Mitchell</td>
                                <td>09274386510</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P20</td>
                                <td>1 Hour</td>
                                <td>12/02/2024</td>
                                <td>4:52 PM</td>
                                <td>5:52 PM</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Steven Evans</td>
                                <td>09351248703</td>
                                <td>Medium</td>
                                <td>P50</td>
                                <td>P150</td>
                                <td>3 Hours</td>
                                <td>12/02/2024</td>
                                <td>1:09 PM</td>
                                <td>4:09 PM</td>
                            </tr>
                            <tr>
                                <td>004</td>
                                <td>Harper Turner</td>
                                <td>09167385240</td>
                                <td>Large</td>
                                <td>P100</td>
                                <td>P200</td>
                                <td>2 Hours</td>
                                <td>12/02/2024</td>
                                <td>11:25 AM</td>
                                <td>1:25 PM</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Brian Collins</td>
                                <td>09238147560</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P20</td>
                                <td>1 Hour</td>
                                <td>12/02/2024</td>
                                <td>10:15 AM</td>
                                <td>11:15 AM</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Ella Stewart</td>
                                <td>09145823657</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P40</td>
                                <td>2 Hours</td>
                                <td>12/01/2024</td>
                                <td>5:39 PM</td>
                                <td>7:39 PM</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Kevin Morris</td>
                                <td>09326481759</td>
                                <td>Medium</td>
                                <td>P50</td>
                                <td>P150</td>
                                <td>3 Hours</td>
                                <td>12/01/2024</td>
                                <td>2:16 PM</td>
                                <td>5:16 PM</td>
                            </tr>
                            <tr>
                                <td>004</td>
                                <td>Scarlett Rogers</td>
                                <td>09260315874</td>
                                <td>Large</td>
                                <td>P100</td>
                                <td>P200</td>
                                <td>2 Hours</td>
                                <td>12/01/2024</td>
                                <td>11:51 AM</td>
                                <td>1:51 PM</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Jacob Reed</td>
                                <td>09175248369</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P20</td>
                                <td>1 Hour</td>
                                <td>12/01/2024</td>
                                <td>10:38 AM</td>
                                <td>11:38 AM</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Lily Cook</td>
                                <td>09365128470</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P20</td>
                                <td>1 Hour</td>
                                <td>11/30/2024</td>
                                <td>07:48 PM</td>
                                <td>08:48 PM</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Henry Morgan</td>
                                <td>09247156308</td>
                                <td>Medium</td>
                                <td>P50</td>
                                <td>P50</td>
                                <td>1 Hour</td>
                                <td>11/30/2024</td>
                                <td>06:30 PM</td>
                                <td>07:30 PM</td>
                            </tr>
                            <tr>
                                <td>004</td>
                                <td>Zoey Cooper</td>
                                <td>09154873692</td>
                                <td>Large</td>
                                <td>P100</td>
                                <td>P300</td>
                                <td>3 Hours</td>
                                <td>11/30/2024</td>
                                <td>05:12 PM</td>
                                <td>08:12 PM</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Samuel Cooper</td>
                                <td>09267154873</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P40</td>
                                <td>2 Hours</td>
                                <td>11/30/2024</td>
                                <td>04:21 PM</td>
                                <td>06:21 PM</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Nora Richardson</td>
                                <td>09327641850</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P40</td>
                                <td>2 Hours</td>
                                <td>11/30/2024</td>
                                <td>03:29 PM</td>
                                <td>05:29 PM</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Benjamin Gray</td>
                                <td>09235847162</td>
                                <td>Medium</td>
                                <td>P50</td>
                                <td>P50</td>
                                <td>1 Hour</td>
                                <td>11/30/2024</td>
                                <td>01:43 PM</td>
                                <td>02:43 PM</td>
                            </tr>
                            <tr>
                                <td>004</td>
                                <td>Lucy Wood</td>
                                <td>09363174825</td>
                                <td>Large</td>
                                <td>P100</td>
                                <td>P100</td>
                                <td>1 Hour</td>
                                <td>11/30/2024</td>
                                <td>12:16 PM</td>
                                <td>01:16 PM</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Jack Murphy</td>
                                <td>09187263509</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P40</td>
                                <td>2 Hours</td>
                                <td>11/30/2024</td>
                                <td>10:55 AM</td>
                                <td>12:55 PM</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Layla Ross</td>
                                <td>09247186253</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P20</td>
                                <td>1 Hour</td>
                                <td>11/30/2024</td>
                                <td>10:03 AM</td>
                                <td>11:03 AM</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Daniel Foster</td>
                                <td>09152834760</td>
                                <td>Medium</td>
                                <td>P50</td>
                                <td>P50</td>
                                <td>1 Hour</td>
                                <td>11/29/2024</td>
                                <td>07:22 PM</td>
                                <td>08:22 PM</td>
                            </tr>
                            <tr>
                                <td>004</td>
                                <td>Aria Peterson</td>
                                <td>09341857239</td>
                                <td>Large</td>
                                <td>P100</td>
                                <td>P100</td>
                                <td>1 Hour</td>
                                <td>11/29/2024</td>
                                <td>05:43 PM</td>
                                <td>06:43 PM</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Jason Bennett</td>
                                <td>09237865410</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P60</td>
                                <td>3 Hours</td>
                                <td>11/29/2024</td>
                                <td>03:08 PM</td>
                                <td>06:08 PM</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Hannah Russell</td>
                                <td>09162473589</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P20</td>
                                <td>1 Hour</td>
                                <td>11/29/2024</td>
                                <td>12:02 PM</td>
                                <td>01:02 PM</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Alexander Hughes</td>
                                <td>09325147860</td>
                                <td>Medium</td>
                                <td>P50</td>
                                <td>P100</td>
                                <td>2 Hours</td>
                                <td>11/29/2024</td>
                                <td>10:29 AM</td>
                                <td>12:29 PM</td>
                            </tr>
                            <tr>
                                <td>004</td>
                                <td>Mila Simmons</td>
                                <td>09258173640</td>
                                <td>Large</td>
                                <td>P100</td>
                                <td>P100</td>
                                <td>1 Hour</td>
                                <td>11/28/2024</td>
                                <td>07:14 PM</td>
                                <td>08:14 PM</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Ethan Price</td>
                                <td>09367024851</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P40</td>
                                <td>2 Hours</td>
                                <td>11/28/2024</td>
                                <td>04:34 PM</td>
                                <td>06:34 PM</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Peyton Woodward</td>
                                <td>09182456379</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P40</td>
                                <td>2 Hours</td>
                                <td>11/28/2024</td>
                                <td>11:58 AM</td>
                                <td>01:58 PM</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Christopher Howard</td>
                                <td>09273648159</td>
                                <td>Medium</td>
                                <td>P50</td>
                                <td>P50</td>
                                <td>1 Hour</td>
                                <td>11/28/2024</td>
                                <td>10:50 AM</td>
                                <td>11:50 AM</td>
                            </tr>
                            <tr>
                                <td>004</td>
                                <td>Stella Brooks</td>
                                <td>09357261840</td>
                                <td>Large</td>
                                <td>P100</td>
                                <td>P200</td>
                                <td>2 Hours</td>
                                <td>11/27/2024</td>
                                <td>06:03 PM</td>
                                <td>08:03 PM</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Justin James</td>
                                <td>09164537281</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P20</td>
                                <td>1 Hour</td>
                                <td>11/27/2024</td>
                                <td>01:22 PM</td>
                                <td>02:22 PM</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Leah Ward</td>
                                <td>09256341789</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P40</td>
                                <td>2 Hours</td>
                                <td>11/27/2024</td>
                                <td>11:05 AM</td>
                                <td>01:05 PM</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Andrew Cox</td>
                                <td>09317628540</td>
                                <td>Medium</td>
                                <td>P50</td>
                                <td>P50</td>
                                <td>1 Hour</td>
                                <td>11/26/2024</td>
                                <td>07:04 PM</td>
                                <td>08:04 PM</td>
                            </tr>
                            <tr>
                                <td>004</td>
                                <td>Natalie Diaz</td>
                                <td>09175483612</td>
                                <td>Large</td>
                                <td>P100</td>
                                <td>P200</td>
                                <td>2 Hours</td>
                                <td>11/26/2024</td>
                                <td>05:17 PM</td>
                                <td>07:17 PM</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Mason Reed</td>
                                <td>09253784016</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P40</td>
                                <td>2 Hours</td>
                                <td>11/26/2024</td>
                                <td>03:52 PM</td>
                                <td>05:52 PM</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Victoria Carter</td>
                                <td>09143068527</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P20</td>
                                <td>1 Hour</td>
                                <td>11/26/2024</td>
                                <td>12:45 PM</td>
                                <td>01:45 PM</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Elijah Brooks</td>
                                <td>09165248730</td>
                                <td>Medium</td>
                                <td>P50</td>
                                <td>P150</td>
                                <td>3 Hours</td>
                                <td>11/26/2024</td>
                                <td>10:23 AM</td>
                                <td>01:23 PM</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Lily Morgan</td>
                                <td>09135674028</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P20</td>
                                <td>1 Hour</td>
                                <td>11/25/2024</td>
                                <td>06:29 PM</td>
                                <td>07:29 PM</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Owen Bailey</td>
                                <td>09217358469</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P40</td>
                                <td>2 Hours</td>
                                <td>11/25/2024</td>
                                <td>02:37 PM</td>
                                <td>04:37 PM</td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Amelia Sanchez</td>
                                <td>09178563240</td>
                                <td>Medium</td>
                                <td>P50</td>
                                <td>P50</td>
                                <td>1 Hour</td>
                                <td>11/25/2024</td>
                                <td>10:11 AM</td>
                                <td>11:11 AM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= ROOT ?>../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>