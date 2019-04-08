<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locker extends Model
{
        /**
         * {@inheritDoc}
         */
        
          protected $fillable = ['guest_id', 'unit_name','is_available'];
        /**
        * {@inheritDoc}
        */

        //   protected $with = ['units'];

         /**
         * Get associated user.
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function guest()
        {
            return $this->belongsTo(Guest::class);
        }

        /**
         * Get associated timers.
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function timers()
        {
            return $this->hasMany(Timer::class);
        }

        /**
         * Get my projects
         *
         * @param  \Illuminate\Database\Eloquent\Builder $query
         * @return \Illuminate\Database\Eloquent\Builder
         */
        public function scopeMine($query)
        {
            return $query->whereUserId(auth()->user()->id);
        }


        /**
         * Get associated user.
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function units()
        {
            return $this->belongsTo(Unit::class);
        }
}
