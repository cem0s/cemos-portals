<?php

namespace App\Http\Controllers\Webshop;

use Illuminate\Http\Request;
use Doctrine\ORM\EntityManager;
use Illuminate\Support\Facades\Auth;
use Image;

class ProfileController extends Controller
{
    protected $userRepo;
 

    public function __construct(EntityManager $em)
    {
      $this->userRepo =  $em->getRepository('App\Entity\Management\User');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //Gladys: Get all the user info.
    	$user = $this->userRepo->getAllUserInfo(Auth::user()->getId());
 
      return view('webshop.pages.profile.profile')->with('userData', $user);
    }


    /**
     * This updates the profile image of the user
     * @author Gladys Vailoces <gladys@cemos.ph>
     * @param $request picture data
     * @return Response
     */
    public function updatePic(Request $request)
    {
    	$file = $request->file('profile-pic');
      //The public directory for profile images
    	$destinationPath = public_path().'\images\\';
    	
      //Move the file to the destination path
    	//$file->move($destinationPath,$file->getClientOriginalName());

        //To crop image
       // Image::make($file)->crop(226, 226)->save($destinationPath.$file->getClientOriginalName());
        Image::make($file)->resize(226, 226)->save($destinationPath.$file->getClientOriginalName());

      //Updates the profile picture path in the user table
    	$isUploaded = $this->userRepo->updateProfilePic($request->all()['user_id'], 'images\\'.$file->getClientOriginalName());
    	if($isUploaded)
    	{
    		return redirect()->route('profile-page')->with('status', "Profile Picture successfully updated.");
    	}
    	return redirect()->route('profile-page')->with('status', "Error in uploading. Please contact your administrator.");
    	
    }
}
