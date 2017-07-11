<?php
namespace App\Repositories\Schedule;

use App\Models\MatchSchedule;

class ScheduleRepository implements ScheduleRepositoryContract
{
    /*
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return MatchSchedule::findOrFail($id);
    }
    public function getModel()
    {
        return new MatchSchedule();
    }

    /*
     * @return mixed
     */
    public function getAll()
    {
        return MatchSchedule::all();
    }
    
    /*
     * @param $id
     * @return mixed
     
    public function getScheduleSchedule($id)
    {
        return Schedule::findOrFail($id)->schedule;
    }

    public function getScheduleResult($id)
    {
        return Schedule::findOrFail($id)->result;
    } 

    */

    public function getAllScheduleCount()
    {
        return MatchSchedule::all()->count();
    }

    public function create($requestData)
    {
        return MatchSchedule::create($requestData);
    }

    public function update($id, $requestData)
    {
        $Schedule= MatchSchedule::findOrFail($id);
        $Schedule->fill($requestData)->save();
        return $Schedule;
    }

    public function destroy($id)
    {
        return MatchSchedule::destroy($id);
    }

    public function deleteMany($data)
    {
        if ($data['ids']) {
            foreach ($data['ids'] as $id){
                Match::destroy($id);
            }
          
        }
    }

}
