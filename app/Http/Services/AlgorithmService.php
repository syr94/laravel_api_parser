<?php

namespace App\Http\Services;

use App\Models\Algorithm;

class PostService
{
    public function create(array $data) : bool
    {
        $post = Post::create([
            'algorithm_type' => $data['algorithm_type'],
            'algorithm_class_name' => $data['algorithm_class_name'],
            'algorithm_description' => $data['algorithm_description']
        ]);


        if($algorithm) {
            return true;
        }

        return false;
    }

    public function update(array $data, int $algorithm_id) : bool
    {
        $algorithm = Algorithm::findOrFail($algorithm_id)->update($data);


        if ($algorithm) {
            return true;
        }

        return false;
    }

    public function delete(int $algorithm_id) : bool
    {
        $algorithm = Post::findOrFail($algorithm_id)->delete();

        if($algorithm) {
            return true;
        }

        return false;
    }

}