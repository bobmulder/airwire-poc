<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    // region Relations

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // endregion

    // region Getters

    public function getName(): string
    {
        return $this->name;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function getVisible(): bool
    {
        return $this->visible;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    // endregion

    // region Setters

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;
        return $this;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function setVisibility(bool $visible = true): self
    {
        $this->visible = $visible;
        return $this;
    }

    public function setUserId(int $id): self
    {
        $this->user_id = $id;
        return $this;
    }

    // endregion

}
