
<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
?>




 <h1>Hello</h1>
 
 <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>title</th>
                <th>price</th>
                <th>address</th>
                <th>size</th>
                <th>ground</th>
                <th>link</th>
                <th>create_date</th>
            </tr>
        </thead>
    </table>

<script>

$('#example').DataTable({
    ajax: '/home/getAll',
    processing: true,    
    keys: true,
    columns: [
        { data: 'title' },
        { data: 'price',
          render: function (data, type) {
            if (type === 'display') {
                return new Intl.NumberFormat('fr-FR').format(data) + ' €';
            }
            return data;
         },
        },
        { data: 'address' },
        { data: 'size' },
        { data: 'ground' },
        { data: 'link' },
        { data: 'create_date' }
    ],


});

</script>