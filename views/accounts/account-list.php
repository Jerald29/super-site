<?php
require_once "../../config/session.php"; 
require_once "../../config/db.php"; 

$currentPage = 'account-list';

$limit = 10; // Number of accounts per page
$page = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
$offset = ($page - 1) * $limit;

// Get total account count
$totalQuery = "SELECT COUNT(*) as total FROM accounts";
$totalStmt = $pdo->query($totalQuery);
$totalAccounts = $totalStmt->fetch(PDO::FETCH_ASSOC)["total"];
$totalPages = ceil($totalAccounts / $limit);

// Fetch accounts with LIMIT and OFFSET
$query = "SELECT id, role, email, username FROM accounts LIMIT :limit OFFSET :offset";
$stmt = $pdo->prepare($query);
$stmt->bindValue(":limit", $limit, PDO::PARAM_INT);
$stmt->bindValue(":offset", $offset, PDO::PARAM_INT);
$stmt->execute();
$accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
  
  <!-- Header include -->
  <?php $pageTitle = 'Super | Account List'; ?>
  <?php include('../../includes/header.php'); ?>
  
  <body class="layout-fixed sidebar-expand-lg sidebar-mini sidebar-collapse bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      
      <!-- Navbar include -->
      <?php include('../../includes/navbar.php'); ?>

      <!-- Sidebar include -->
      <?php include('../../includes/sidebar.php'); ?>

      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Account List</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Account List</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">

              <div class="col-md-12 d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="card mb-4">

                        <div class="card-header">
                            <h3 class="card-title">
                                ACCOUNTS
                            </h3>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead class="table-secondary">
                                    <tr>
                                        <th class="col-2">Account ID</th> 
                                        <th class="col-2">Role</th>
                                        <th class="col-3">Email</th>
                                        <th class="col-3">Username</th>
                                        <th class="text-center col-3">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($accounts as $account): ?>
                                        <tr class="align-middle">
                                            <td><?= "USR-1-" . str_pad($account["id"], 3, "0", STR_PAD_LEFT) ?></td>
                                            <td><?= htmlspecialchars($account["role"]) ?></td>
                                            <td><?= htmlspecialchars($account["email"]) ?></td>
                                            <td><?= htmlspecialchars($account["username"]) ?></td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-danger btn-sm rounded-4">Delete</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                                <li class="page-item <?= ($page <= 1) ? 'disabled' : '' ?>">
                                    <a class="page-link" href="?page=<?= $page - 1 ?>">Previous</a>
                                </li>

                                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                    <li class="page-item <?= ($page == $i) ? 'active' : '' ?>">
                                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                                    </li>
                                <?php endfor; ?>

                                <li class="page-item <?= ($page >= $totalPages) ? 'disabled' : '' ?>">
                                    <a class="page-link" href="?page=<?= $page + 1 ?>">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
              </div>

            </div>
            <!-- /.row -->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->

      <!-- Footer include -->
      <?php include('../../includes/footer.php'); ?>

    </div>
    <!--end::App Wrapper-->

    <!-- scripts include -->
    <?php include('../../includes/script.php'); ?>

  </body>
  <!--end::Body-->
</html>
