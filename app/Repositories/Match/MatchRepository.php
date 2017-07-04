<?php
namespace App\Repositories\Match;

use App\Models\Match;

class MatchRepository implements MatchRepositoryContract
{
    /*
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return Match::findOrFail($id);
    }
    public function getModel()
    {
        return new Match();
    }

    /*
     * @return mixed
     */
    public function getAll()
    {
        return Match::all();
    }
    
    /*
     * @param $id
     * @return mixed
     */
    public function getMatchSchedule($id)
    {
        return Match::findOrFail($id)->schedule;
    }

    public function getMatchResult($id)
    {
        return Match::findOrFail($id)->result;
    }

    public function getAllMatchCount()
    {
        return Match::all()->count();
    }

    public function create($requestData)
    {
        return Match::create($requestData);
    }

    public function update($id, $requestData)
    {
        $match= Match::findOrFail($id);
        $match->fill($requestData)->save();
        return $Match;
    }

    public function destroy($id)
    {
        return Match::destroy($id);
    }

    public function deleteMany($data)
    {
        if ($data['ids']) {
            $entries = Match::whereIn('id', $data['ids']);

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
