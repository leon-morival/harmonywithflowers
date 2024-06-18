<div class="mb-4">
    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
    <input type="text" name="name" id="name" value="{{ old('name', $user->name ?? '') }}"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        required>
</div>

<div class="mb-4">
    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
    <input type="email" name="email" id="email" value="{{ old('email', $user->email ?? '') }}"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        required>
</div>

<div class="mb-4">
    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
    <input type="password" name="password" id="password"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    @if (isset($user))
        <small class="text-gray-600">Leave blank to keep current password</small>
    @endif
</div>

<div class="mb-4">
    <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password:</label>
    <input type="password" name="password_confirmation" id="password_confirmation"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
</div>

<div class="mb-4">
    <label for="is_admin" class="block text-gray-700 text-sm font-bold mb-2">Is Admin:</label>
    <select name="is_admin" id="is_admin"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        required>
        <option value="0" {{ isset($user) && !$user->is_admin ? 'selected' : '' }}>No</option>
        <option value="1" {{ isset($user) && $user->is_admin ? 'selected' : '' }}>Yes</option>
    </select>
</div>
