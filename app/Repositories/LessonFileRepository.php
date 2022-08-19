<?php

namespace App\Repositories;

use App\Models\LessonFile;
use Czim\Repository\BaseRepository;

class LessonFileRepository extends BaseRepository
{
    /**
     * Returns specified model class name.
     *
     * @return string
     */
    public function model()
    {
        return LessonFile::class;
    }

    /**
     * Create or update file record
     *
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model|mixed|null
     */
    public function createOrUpdate(array $data)
    {
        $file = $this->findWhere([
            'account_id' => $data['account_id'],
            'lesson_id' => $data['lesson_id'],
            'file_name' => $data['file_name']]
        )->first();

        if (!$file) {
            $file = $this->create([
                'account_id' => $data['account_id'],
                'lesson_id' => $data['lesson_id'],
                'file_name' => $data['file_name']
            ]);
        }

        return $file;
    }

    /**
     * @param array $attributes
     * @return void
     */
    public function deleteWhere(array $attributes)
    {
        /** @var LessonFile $file */
        $file = $this->findWhere($attributes)->first();

        if (!$file) {
            return;
        }

        $this->delete($file->id);
    }
}
