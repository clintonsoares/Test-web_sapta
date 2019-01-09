<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	

	public function index()
	{
		$this->load->view('test/testpage'); // loading testpage.php from view
	}

	public function fetchData()
	{
		$output='';
		$query='';
		$this->load->model('testmodel'); // call testmodel.php from model
		if($this->input->post('query'))
		{
			$query = $this->input->post('query');
		}
		$data = $this->testmodel->fetch_data($query);// call fetch_data() function from testmodel.php; query variable is used for db queries

		if($data->num_rows() > 0)
		{
			$output .= '
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Age</th>
						</tr>
					</thead>
					<tbody>
			';
			foreach ($data->result() as $row)
			{

				$output .='
							<tr>
								<td>'.$row->id.'</td>
								<td>'.$row->name.'</td>
								<td id="dob">'.$row->dob.'</td>
							</tr>
				';
			}
			$output .= '
					</tbody>
				</table>
			';
		}
		else
		{
			$output = 'Index Not Available';
		}
		echo $output;
	}

	/*public function myfunc()
	{
		$arrlist = [ 
			'id' => [1,2,3,4,6,7,8,9],
			'name' => ['A','B','C','D','F','G','H','I'],
			'age' => [8,7,7,8,6,6,2,1]
		];


		$ipnum = $this->input->post('ipnum');
		$flag = false;
		extract($arrlist);
		foreach($id as $i):
			if($i==$ipnum){
				$flag = true;
				echo "Name: ".$name[$ipnum-1]."<br>Age: ".$age[$ipnum-1];
			}
		endforeach;
		if($flag == false)
			echo "Index Not Available";
	}*/
}