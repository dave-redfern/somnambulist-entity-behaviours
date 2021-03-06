<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

namespace Somnambulist\EntityBehaviours\Contracts;

use Somnambulist\ValueObjects\Types\DateTime\DateTime;

/**
 * Interface Publishable
 *
 * @package    Somnambulist\EntityBehaviours\Contracts
 * @subpackage Somnambulist\EntityBehaviours\Contracts\Publishable
 * @author     Dave Redfern
 */
interface Publishable
{

    /**
     * @return boolean
     */
    public function isPublished(): bool;

    /**
     * @return null|DateTime
     */
    public function publishedAt(): ?DateTime;

    /**
     * Publish at the date/time supplied, or "now"
     *
     * @param null|DateTime $date
     *
     * @return void
     */
    public function publishAt(DateTime $date = null): void;

    /**
     * Remove the publish date
     *
     * @return void
     */
    public function unpublish(): void;
}
