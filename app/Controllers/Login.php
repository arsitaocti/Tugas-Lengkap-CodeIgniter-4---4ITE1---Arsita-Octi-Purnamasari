public function create()
    {
        try {
            $validate = $this->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            if(!$validate) {
                session()->setFlashData("errors", $this->validator->listErrors());
                return redirect()->to(previous_url())->withInput();
            }
    
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
    
            $user = $this->userModel
                    ->where('email', $email)
                    ->first();
    
            if(!$user) {
                session()->setFlashData("errors", "Email or password is invalid");
                return redirect()->to(previous_url())->withInput();
            }
    
            if(md5($password) != $user['password']) {
                session()->setFlashData("errors", "Email or password is invalid");
                return redirect()->to(previous_url())->withInput();
            }
    
            $this->session->set('id', $user['id']);
            $this->session->set('name', $user['name']);
            $this->session->set('loggedIn', true);
    
            return redirect()->to('/product');
        } catch(\Exception $e) {
            return redirect()->to(previous_url());
        }
    }