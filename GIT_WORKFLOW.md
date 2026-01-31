# Git Workflow Guide (Team Development)

This repository uses a branch-based Git workflow to ensure safe and consistent team collaboration.

---

## Core Rules (Very Important)

- ❌ **Never work directly on the `main` branch**
- ✅ Always work on **your own branch**
- ✅ Always sync with `main` before starting new work
- ✅ All changes must be merged into `main` via **Pull Requests**
- ❌ **Never force push (`git push --force`)**

---

## Standard Development Workflow

### Step 1: Update local `main` branch
**(Run on: `main` branch)**

Always start by synchronizing your local `main` branch with the remote repository.

```bash
git checkout main
git pull
```

This ensures:

- Local `main` == Remote `main`
- You are working with the latest codebase

### Step 2: Switch to your personal branch
**(Run on: your own branch)**

Example branch names:

- jaskeerat
- takaharu
- feature-login

```bash
git checkout your-branch-name
```

### Step 3: Merge latest `main` into your branch
**(Run on: your own branch)**

Bring the newest updates from `main` into your branch.

```bash
git merge main
```

If conflicts appear, resolve them before continuing.

### Step 4: Work on your code
**(Run on: your own branch)**

- Make all code changes in your branch only
- Do not edit or commit on `main`

### Step 5: Commit and push your changes
**(Run on: your own branch)**

```bash
git add .
git commit -m "Describe your changes clearly"
git push
```

### Step 6: Create a Pull Request
**(On GitHub Web UI)**

- Go to the GitHub repository
- Create a Pull Request from your branch → `main`
- Clearly describe:
	- What was changed
	- Why it was changed

### Step 7: Review and merge
**(Handled by team members)**

- Team members review the Pull Request
- Once approved, it is merged into `main`

---

## Merge Conflict Resolution Guide

If team members work on different files, conflicts usually do not occur. However, conflicts may happen when the same file or nearby lines are edited.

### 1. Identify conflicted files
**(Run on: your own branch)**

```bash
git status
```

Files marked as both modified have merge conflicts.

### 2. Inspect conflict markers
**(Run on: your own branch)**

Open the conflicted file. You will see markers like:

```text
<<<<<<< HEAD
(Your branch changes)
=======
(Changes from main)
>>>>>>> main
```

Meaning:

- `HEAD` → your current branch
- `main` → incoming changes from `main`

### 3. Manually resolve conflicts
**(Run on: your own branch)**

- Edit the code to the final desired state
- Remove all conflict markers:

```text
<<<<<<<
=======
>>>>>>>
```

You may:

- Keep one side
- Or combine both changes

⚠️ Leaving conflict markers will cause errors.

### 4. Mark conflicts as resolved and commit
**(Run on: your own branch)**

```bash
git add <resolved-file-name>
git commit
```

Git usually provides a default merge commit message such as:

```text
Merge branch 'main' into your-branch-name
```

You may keep this message as-is.

---

## Emergency Reset (Last Resort)

Use this only if your local repository is completely broken and you no longer need your local work.

⚠️ This will permanently delete all local changes.  
⚠️ This affects only your local machine.  
⚠️ Never force push after this.

### Reset local `main` to remote `main`
**(Run on: `main` branch)**

```bash
git checkout main
git fetch origin
git reset --hard origin/main
```

### Reset your personal branch to remote `main`
**(Run on: your own branch)**

```bash
git checkout your-branch-name
git reset --hard origin/main
```

This makes your branch identical to the remote `main` branch.