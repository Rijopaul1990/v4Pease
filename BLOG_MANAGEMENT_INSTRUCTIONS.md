# Blog Management System - Instructions

## Overview
A complete blog management system has been created for the Admin panel. You can now add, view, edit, and delete blog posts.

## Features Created

### 1. View Blogs Page (`/admin/viewBlogs`)
- Displays all blog posts in a paginated table (10 per page)
- Shows blog image thumbnail, title, excerpt, category, post date, and created date
- Has action buttons for Edit, Delete, and View

### 2. Edit Blog Page (`/admin/blog/edit/{id}`)
- Allows editing existing blog posts
- Pre-fills all fields with current data
- Shows current image and allows uploading a new one
- Validates slug uniqueness (excluding current blog)
- Uses Summernote rich text editor for formatting

### 3. Delete Functionality
- Confirmation modal before deleting
- Automatically deletes associated image file from storage
- Shows success message after deletion

## How to Use

### Accessing Blog Management
1. Login to Admin panel
2. Go to **Page Management** in sidebar
3. Click on **"View/Manage Blogs"**

### Viewing All Blogs
- Navigate to `/admin/viewBlogs`
- See all blogs in a table format
- Use pagination at bottom to navigate through pages
- Click eye icon to view blog on frontend (opens in new tab)

### Adding a New Blog
- Click **"Add New Blog"** button on View Blogs page
- Or go to **"Add Blog"** in sidebar
- After saving, you'll be redirected to View Blogs page

### Editing a Blog
1. On View Blogs page, click the **yellow pencil icon** (Edit button)
2. Update any fields you want to change
3. Optionally upload a new image (leave empty to keep current)
4. Click **"Update"** button
5. Old image will be automatically deleted if you upload a new one

### Deleting a Blog
1. On View Blogs page, click the **red trash icon** (Delete button)
2. A confirmation modal will appear
3. Click **"Delete"** to confirm or **"Cancel"** to go back
4. Blog and its image will be permanently deleted

## Files Created/Modified

### New Files:
- `resources/views/Admin/viewBlogs.blade.php` - View all blogs page
- `resources/views/Admin/editBlog.blade.php` - Edit blog page

### Modified Files:
- `app/Http/Controllers/Admin/Admin.php` - Added methods:
  - `viewBlogs()` - Display all blogs with pagination
  - `editBlog($id)` - Show edit form
  - `updateBlog($id)` - Process blog updates
  - `deleteBlog($id)` - Delete blog and image
  
- `routes/admin.php` - Added routes:
  - `GET /admin/viewBlogs` - View blogs page
  - `GET /admin/blog/edit/{id}` - Edit blog page
  - `PUT /admin/blog/update/{id}` - Update blog
  - `DELETE /admin/blog/{id}` - Delete blog
  
- `resources/views/Admin/partials/sidebar.blade.php` - Added "View/Manage Blogs" link

## Important Notes

1. **Image Handling**: When editing, the old image is automatically deleted only if you upload a new one
2. **Slug Validation**: Slugs must be unique, but the current blog's slug is allowed during editing
3. **Pagination**: Shows 10 blogs per page
4. **Rich Text Editor**: Uses Summernote for HTML content editing
5. **Confirmation**: Delete action requires confirmation to prevent accidental deletion
6. **Success Messages**: All actions (add/edit/delete) show success messages

## Routes Summary

| Method | Route | Description |
|--------|-------|-------------|
| GET | `/admin/addBlog` | Show add blog form |
| POST | `/admin/blog-save` | Save new blog |
| GET | `/admin/viewBlogs` | View all blogs |
| GET | `/admin/blog/edit/{id}` | Show edit form |
| PUT | `/admin/blog/update/{id}` | Update blog |
| DELETE | `/admin/blog/{id}` | Delete blog |

## Admin Navigation Structure

```
Page Management
├── Councelor Page
├── Add Blog (create new)
├── View/Manage Blogs (view/edit/delete)
├── Career Applications
├── Time Settings
└── Price Settings
```

Your blog management system is now complete and ready to use!

