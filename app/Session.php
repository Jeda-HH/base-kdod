<?php
class Session
{
    public function __construct()
    {
        
    }
    
    /**
     * fungsi untuk mengisi Session
     * @param Array $data[key]
     * @param Array $data[data]
     */
    protected function store(Array $data)
    {
        try {
            foreach ($data as $value) {
                $_SESSION[$value['key']] = $value['data'];
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * fungsi untuk update Session
     * @param Array $data[key]
     * @param Array $data[data]
     */
    protected function update(Array $data)
    {
        try {
            foreach ($data as $value) {
                $_SESSION[$value['key']] = $value['data'];
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * fungsi untuk Hapus Session
     */
    protected function destroy()
    {
        try {
            session_destroy();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}